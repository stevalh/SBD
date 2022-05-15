<?php namespace SimpleSoftwareIO\QrCode;
/**
 * Simple Laravel QrCode Generator
 * A simple wrapper for the popular BaconQrCode made for Laravel.
 *
 * @link http://www.simplesoftware.io
 * @author SimpleSoftware support@simplesoftware.io
 *
 */

use Illuminate\Support\ServiceProvider;
use BaconQrCode;
use BaconQrCode\Writer;
use BaconQrCode\Renderer\Image\RendererInterface;
use BaconQrCode\Renderer\Image\Svg;
use BaconQrCode\Renderer\Image\Eps;
use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Renderer\Color\Rgb;
use BaconQrCode\Encoder\Encoder;
use BaconQrCode\Common\ErrorCorrectionLevel;

class BaconQrCodeGenerator implements QrCodeInterface {

    /**
     * Holds the BaconQrCode Writer Object
     *
     * @var \BaconQrCode\Writer
     */
    protected $writer;

    /**
     * Holds the QrCode error correction levels.  This is stored by using the BaconQrCode ErrorCorrectionLevel class constants.
     *
     * @var \BaconQrCode\Common\ErrorCorrectionLevel
     */
    protected $errorCorrection = ErrorCorrectionLevel::L;

    /**
     * Creates a new QrCodeGenerator with a Writer class and with a SVG renderer set as the default.
     */
    public function __construct(Writer $writer = null, RendererInterface $format = null)
    {
        $format = $format ?: new Svg;
        $this->writer = $writer ?: new Writer($format);
    }

    /**
     * Generates a QrCode
     *
     * @param string $text The text to be converted into a QrCode
     * @param null|string $filename The filename and path to save the QrCode file
     * @return string|void Returns a QrCode string depending on the format, or saves to a file.
     */
    public function generate($text, $filename = null)
    {
        if ($filename === null)
        {
            return $this->writer->writeString($text,
                Encoder::DEFAULT_BYTE_MODE_ECODING,
                $this->errorCorrection);
        }
        else
        {
            $this->writer->writeFile($text,
                $filename,
                Encoder::DEFAULT_BYTE_MODE_ECODING,
                $this->errorCorrection);
        }
    }

    /**
     * Switches the format of the outputted QrCode or defaults to SVG
     *
     * @param string $format The desired format.
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function format($format)
    {
        switch($format)
        {
            case 'png':
                $this->writer->setRenderer(new Png);
                break;
            case 'eps':
                $this->writer->setRenderer(new Eps);
                break;
            case 'svg':
                $this->writer->setRenderer(new Svg);
                break;
            default:
                throw new \InvalidArgumentException('Invalid format provided.');
        }
        return $this;
    }

    /**
     * Changes the size of the QrCode
     *
     * @param int $pixels The size of the QrCode in pixels
     * @return $this
     */
    public function size($pixels)
    {
        $this->writer->getRenderer()->setHeight($pixels);
        $this->writer->getRenderer()->setWidth($pixels);
        return $this;
    }

    /**
     * Changes the foreground color of a QrCode
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return $this
     */
    public function color($red, $green, $blue)
    {
        $this->writer->getRenderer()->setForegroundColor(new Rgb($red, $green, $blue));
        return $this;
    }

    /**
     * Changes the background color of a QrCode
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return $this
     */
    public function backgroundColor($red, $green, $blue)
    {
        $this->writer->getRenderer()->setBackgroundColor(new Rgb($red, $green, $blue));
        return $this;
    }

    /**
     * Changes the error correction level of a QrCode
     *
     * @param string $level Desired error correction level.  L = 7% M = 15% Q = 25% H = 30%
     * @return $this
     */
    public function errorCorrection($level)
    {
        $this->errorCorrection = constant("BaconQrCode\Common\ErrorCorrectionLevel::$level");
        return $this;
    }

    /**
     * Creates a margin around the QrCode
     *
     * @param int $margin The desired margin in pixels around the QrCode
     * @return $this
     */
    public function margin($margin)
    {
        $this->writer->getRenderer()->setMargin($margin);
        return $this;
    }
}