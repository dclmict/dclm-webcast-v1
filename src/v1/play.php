<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Just play...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/mejs/build/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/mejs/build/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="assets/mejs/build/mediaelementplayer.css">

    <style>

        html, body {
            overflow-x: hidden;
        }

        #container {
            padding: 0 20px 50px;
        }
        .error {
            color: red;
        }
        a {
            word-wrap: break-word;
        }

        code {
            font-size: 0.8em;
        }

        /* #player2-container .mejs__time-buffering, #player2-container .mejs__time-current, #player2-container .mejs__time-handle,
        #player2-container .mejs__time-loaded, #player2-container .mejs__time-hovered, #player2-container .mejs__time-marker, #player2-container .mejs__time-total {
            height: 2px;
        }

        #player2-container .mejs__time-total {
            margin-top: 9px;
        }
        #player2-container .mejs__time-handle {
            left: -5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ffffff;
            top: -5px;
            cursor: pointer;
            display: block;
            position: absolute;
            z-index: 2;
            border: none;
        }
        #player2-container .mejs__time-handle-content {
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
        } */
    </style>
</head>

<body>

    <div id="container">
        <section>
            <h3>Global Options</h3>
            <form action="#" method="get">
                <label>Language <select name="lang">
                    <option value="ca">Català / Catalan (ca)</option>
                    <option value="cs">Čeština / Czech (cs)</option>
                    <option value="de">Deutsch / German (de)</option>
                    <option value="en" selected>English (en)</option>
                    <option value="es">Español / Spanish; Castilian (es)</option>
                    <option value="fa">فارسی / Persian (fa)</option>
                    <option value="fr">Français / French (fr)</option>
                    <option value="hr">Hrvatski / Croatian (hr)</option>
                    <option value="hu">Magyar / Hungarian (hu)</option>
                    <option value="it">Italiano / Italian (it)</option>
                    <option value="ja">日本語 / Japanese (ja)</option>
                    <option value="ko">한국어 / Korean (ko)</option>
                    <option value="ms">Melayu / Malay (ms)</option>
                    <option value="nl">Nederlands / Dutch (nl)</option>
                    <option value="pl">Polski / Polish (pl)</option>
                    <option value="pt">Português / Portuguese (pt)</option>
                    <option value="ro">Română / Romanian (ro)</option>
                    <option value="ru">Русский / Russian (ru)</option>
                    <option value="sk">Slovensko / Slovak (sk)</option>
                    <option value="sv">Svenska / Swedish (sv)</option>
                    <option value="uk">Українська / Ukrainian (uk)</option>
                    <option value="zh">繁体中文 / Traditional Chinese (zh-TW)</option>
                    <option value="zh-CN">简体中文 / Simplified Chinese (zh-CN)</option>
                </select>
                </label>
                <label>Stretching (Video Only)<select name="stretching">
                    <option value="auto" selected>Auto (default)</option>
                    <option value="responsive">Responsive</option>
                    <option value="fill" selected>Fill</option>
                    <option value="none" selected>None (original dimensions)</option>
                </select>
                </label>
            </form>
        </section>

        <br>
        <div class="players" id="player1-container">
            <h3>Video Player</h3>
            <div class="media-wrapper">
                <video id="player1" width="640" height="360" style="max-width:100%;" poster="http://www.mediaelementjs.com/images/big_buck_bunny.jpg" preload="none" controls playsinline webkit-playsinline>
                    <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/CastVideos/mp4/BigBuckBunny.mp4" type="video/mp4">
                    <track srclang="de" kind="subtitles" src="assets/mejs/build/german.vtt" label="German with lines">
                    <track srclang="en" kind="subtitles" src="assets/mejs/build/english.vtt" default>
                    <track srclang="en" kind="chapters" src="assets/mejs/build/english_chapters.vtt">
                    <track srclang="de" kind="chapters" src="assets/mejs/build/german_chapters.vtt">
                </video>
            </div>
            <div class="myslides"></div>
            <br>
            <div>
                <label>Sources <select name="sources">
                    <option value="//github.com/mediaelement/mediaelement-files/blob/master/big_buck_bunny.mp4?raw=true">MP4</option>
                    <option value="//upload.wikimedia.org/wikipedia/commons/2/22/Volcano_Lava_Sample.webm">WebM</option>
                    <option value="https://bitdash-a.akamaihd.net/content/MI201109210084_1/m3u8s/f08e80da-bf1d-4e3d-8899-f0f6155f6efa.m3u8">HLS</option>
                    <option value="//www.bok.net/dash/tears_of_steel/cleartext/stream.mpd">M(PEG)-DASH</option>
                    <option value="https://www.dailymotion.com/video/x11prnt">DailyMotion</option>
                    <option value="https://www.youtube.com/watch?v=twYp6W6vt2U">YouTube</option>
                    <option value="https://player.vimeo.com/video/108018156?title=0&amp;byline=0&amp;portrait=0&amp;badge=0">Vimeo</option>
                    <option value="https://www.facebook.com/peopleareawesome/videos/1542174665831706/">Facebook</option>
                    <option value="https://www.twitch.tv/videos/109010497">Twitch</option>
                </select>
                </label>
            </div>
            <br>
        </div>
        <br>
        <hr>
    </div>

    <script src="assets/mejs/build/mediaelement-and-player.js"></script>
    <script src="assets/mejs/build/renderers/dailymotion.js"></script>
    <script src="assets/mejs/build/renderers/facebook.js"></script>
    <script src="assets/mejs/build/renderers/soundcloud.js"></script>
    <script src="assets/mejs/build/renderers/twitch.js"></script>
    <script src="assets/mejs/build/renderers/vimeo.js"></script>
    <script src="assets/mejs/build/lang/cs.js"></script>
    <script src="assets/mejs/build/lang/de.js"></script>
    <script src="assets/mejs/build/lang/es.js"></script>
    <script src="assets/mejs/build/lang/fa.js"></script>
    <script src="assets/mejs/build/lang/fr.js"></script>
    <script src="assets/mejs/build/lang/hr.js"></script>
    <script src="assets/mejs/build/lang/hu.js"></script>
    <script src="assets/mejs/build/lang/it.js"></script>
    <script src="assets/mejs/build/lang/ja.js"></script>
    <script src="assets/mejs/build/lang/ko.js"></script>
    <script src="assets/mejs/build/lang/ms.js"></script>
    <script src="assets/mejs/build/lang/nl.js"></script>
    <script src="assets/mejs/build/lang/pl.js"></script>
    <script src="assets/mejs/build/lang/pt.js"></script>
    <script src="assets/mejs/build/lang/ro.js"></script>
    <script src="assets/mejs/build/lang/ru.js"></script>
    <script src="assets/mejs/build/lang/sk.js"></script>
    <script src="assets/mejs/build/lang/sv.js"></script>
    <script src="assets/mejs/build/lang/uk.js"></script>
    <script src="assets/mejs/build/lang/zh-cn.js"></script>
    <script src="assets/mejs/build/lang/zh.js"></script>
    <script src="assets/mejs/build/demo.js"></script>
</body>
</html>
