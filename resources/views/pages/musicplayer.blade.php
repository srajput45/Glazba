<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicc Player</title>
    <link rel="stylesheet" href="css/musicplayer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400">
    <link rel="stylesheet" href="https://michael-zhigulin.github.io/mz-codepen-projects/Material%20Design%20UI%20Audio%20Player/font/font.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="player"  style="background-image: url('images/new release/2.jpg')">
          <div class="like waves-effect waves-light">
            <i class="icon-heart"></i>
          </div>
          <div class="mask"></div>
          <ul class="player-info info-one">
            <li>Rock'n'Roll Nerd</li>
            <li>Tim Minchin</li>
            <li>5:34</li>
          </ul>
          <ul class="player-info info-two">
            <li>Rock'n'Roll Nerd</li>
            <li>Tim Minchin</li>
            <li><span id="duration"></span><i> / </i>5:34</li>
          </ul>
          <div id="play-button" class="unchecked">
            <i class="icon icon-play"></i>
          </div>
          <div class="control-row">
            <div class="waves-animation-one"></div>
            <div class="waves-animation-two"></div>
            <div id="pause-button">
              <i class="icon"></i>
            </div>
            <div class="seek-field">
              <input id="audioSeekBar" min="0" max="334" step="1" value="0" type="range" oninput="audioSeekBar()" onchange="this.oninput()">
            </div>
            <div class="volume-icon">
              <i class="icon-volume-up"></i>
            </div>
            <div class="volume-field">
              <input type="range" min="0" max="100" value="100" step="1" oninput="audio.volume = this.value/100" onchange="this.oninput()">
            </div>
          </div>
        </div>
      </div>
      <audio id="audio-player" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" preload="auto" loop>
        <source src="https://michael-zhigulin.github.io/mz-codepen-projects/Material%20Design%20UI%20Audio%20Player/audio/Tim%20Minchin%20%E2%80%94%20Rock%20n%20Roll%20Nerd.ogg" type="audio/ogg">
            <source src="https://michael-zhigulin.github.io/mz-codepen-projects/Material%20Design%20UI%20Audio%20Player/audio/Tim%20Minchin%20%E2%80%94%20Rock%20n%20Roll%20Nerd.mp3" type="audio/mpeg">
      </audio>
      <script src="js/audioplayer.js"></script>
</body>
</html>