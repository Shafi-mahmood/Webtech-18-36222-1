<style>
  .cd-schedule__group>ul {
    position: relative;
    padding: 0 var(--component-padding);
    display: flex;
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch;
  }

  .cd-schedule__event {
    flex-shrink: 0;
    float: left;
    height: 150px;
    width: 70%;
    max-width: 300px;
  }

  .cd-schedule-modal {
    position: fixed;
    z-index: 3;
    top: 0;
    right: 0;
    height: 100%;
    width: 100%;
    visibility: hidden;
    transform: translateX(100%);
    transition: transform .4s, visibility .4s;
  }

  .cd-schedule-modal--open {
    transform: translateX(0);
    visibility: visible;
  }


  .cd-schedule__group {
    flex-basis: 0;
    flex-grow: 1;
  }

  .cd-schedule__event {
    position: absolute;
    z-index: 3;
    width: calc(100% + 2px);
    left: -1px;
  }
</style>

<!DOCTYPE HTML>
<html>

<head>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:rgb(97, 105, 116);">
  <div class="header">
    <div class="col-3 col-s-12">
      <div class="menu">
        <?php include 'menu.php';?>
      </div>
    </div>

    <br /><br /><br />
    <h1 style="text-align: center" class="aside">Schedule</h1>
  </div>
  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
    <div class="cd-schedule__timeline">
      <ul>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <!-- additional elements here -->
      </ul>
    </div> <!-- .cd-schedule__timeline -->

    <div class="cd-schedule__events">
      <ul>
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Monday</span></div>

          <ul>
            <li class="cd-schedule__event">
              <a data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                <em class="cd-schedule__name">Abs Circuit</em>
              </a>
            </li>

            <!-- other events here -->
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>

          <ul>
            <!-- events here -->
          </ul>
        </li>

        <!-- additional li.cd-schedule__group here -->
      </ul>
    </div>

    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>

        <div class="cd-schedule-modal__header-bg"></div>
      </header>

      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>

      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  </div> <!-- .cd-schedule -->
  <div class="pofmenu">
    <?php include 'promenu.php';?>
  </div>

  <div class="footer">
    <footer style="text-align: center">&copy; Copyright 2021</footer>
  </div>
</body>

</html>