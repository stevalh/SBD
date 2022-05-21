<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            height: 1000px;
            border: 1px black solid;
            margin: 5px;
            padding: 5px;
            display: grid;
            grid-template-areas: "header header"
                "gambar jnama"
                "gambar tnama"
                "jvac jvac"
                "tvac tvac";
            grid-template-columns: 1fr 1.5fr;
            grid-template-rows: 0.5fr 0.2fr 1fr 0.3fr 1.5fr;


        }

        header {
            background-color: purple;
            margin: 5px;
            padding: 5px;
            grid-area: header;
            background-image: url("moroccan-flower-dark.png");
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            font-family: 'Source Sans Pro', sans-serif;
            margin-bottom: 17px;
            border-bottom-right-radius : 10px;
            border-bottom-left-radius: 10px;
            color: rgb(245, 245, 245);
        }

        .gambar {
            background-color: plum;
            margin: 5px;
            padding: 5px;
            grid-area: gambar;
            background-image: url("bendera\ singapura.png");
            background-size: contain;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .jnama {
            grid-area: jnama;
            background-color: #e2e1e1ab;
            color: #3f3f3f;
            margin: 5px;
            border-top-left-radius : 10px;
            border-bottom-left-radius: 10px;
            padding: 5px;
            display: flex;
            align-items: center;
            font-style: bold;
            font-size: 20px;

        }

        .tnama {
            grid-area: tnama;
            background-color: blue;
            margin: 5px;
            padding: 5px;
        }

        .jvac {
            grid-area: jvac;
            background-color: #e2e1e1ab;
            color: #3f3f3f;
            margin: 5px;
            border-top-left-radius : 10px;
            border-bottom-left-radius: 10px;
            padding: 5px;
            display: flex;
            align-items: center;
            font-style: bold;
            font-size: 17px;
        }

        .tvac {
            grid-area: tvac;
            background-color: skyblue;
            margin: 5px;
            padding: 5px;
        }
    </style>

</head>
