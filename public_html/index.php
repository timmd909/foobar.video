<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

$now = new \DateTime('now');


?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fontawesome/all.css">

    <title>Foobar.video - Save your VHS tape before they go Foobar!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <header>
            <img src="img/header-logo.svg" alt="Foobar Video Logo" id="header-logo">
            <h1>Foobar.Video</h1>
            <p>Save your precious home videos before they go all foobar</p>
          </header>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4">
          <h2 class="border-bottom">Mission Statement</h2>
          <p>To save as many memories as possible from the ravages of time</p>
        </div><!-- / .col -->
        <div class="col-6 col-md-4">
          <h2 class="border-bottom">Pricing</h2>
          <p>$25 per VHS tape of any length + $25 per USB thumbdrive<br>
            (USB drives can usually store between 20 to 30 videos)</p>
          <p>Bulk discounts are available for customers with more than 20 tapes</p>
        </div><!-- / .col -->
        <div class="col-6 col-md-4">

          <div class="alert alert-info">
            <h2>Contact Info</h2>

            <dl>
              <dt>Email</dt>
              <dd><a href="mailto: <?= $emailAddress ?>"><?= $emailAddress ?></a></dd>
            </dl>

            <dl>
              <dt>Phone Number</dt>
              <dd><a href="tel: 1+<?= $phoneNumber ?>"><?= $phoneNumber ?></a></dd>
            </dl>
          </div>

        </div><!-- / .col -->
      </div><!-- / .row -->

      <div class="row">
        <div class="col-12">
          <section>
            <h2>Frequently Asked Questions</h2>
            <dl>
              <dt>How are my memories returned?</dt>
              <dd>
                You'll be given back all your tapes and as many USB thumbdrives
                as necessary to store all the videos.
              </dd>

              <dt>How much is shipping and handling?</dt>
              <dd>
                <p>
                  I'd prefer not to do that if possible as I'm currently only
                  accepting business from people in the Pittsburgh area. My
                  suggestion would be to meet at a police station that has a
                  designated area under surveillance for doing internet
                  business safely. That's what "they" recommend, and it could
                  save $50-$80 in shipping costs (depending on the number
                  of tapes).
                </p>
              </dd>

              <dt>Are customers charged for unrecoverable VHS tapes?</dt>
              <dd>
                No charge if I'm unable to recover a VHS tape. So far, that's only
                happened one time. The tape itself had become too sticky to allow
                the spindles to rewind or play the tape.
              </dd>

              <dt>Are my memories safe with you?</dt>
              <dd>
                <p>
                  Yes. You'll be getting the original tapes back along with
                  digital videos on USB thumbdrive(s). For the brief time I'll
                  be in possession of your tapes, they'll be kept in a cool,
                  dry place to avoid further degradation.
                </p>
                <p>
                  I only view the first and last minute of the capture. If you're
                  worried about me seeing embarrassing videos of you dressing up
                  and dancing while lip syncing to Michael Jackson songs, you're
                  in luck (as long as it's not in the first or last minute).
                </p>
              </dd>

              <dt>What is the turn around time?</dt>
              <dd>
                Videos can usually be processed and ready for pickup in about
                one week. If you have a large amount of VHS tapes (30+), you're
                probably looking at two weeks.
              </dd>

              <dt>Is there anything I can do about the shaky quality of
                early home movies?</dt>
              <dd>
                <p>
                  Yes. You'll receive a verbatim copy and a stabilized
                  version. The old camcorders were painfully heavy on shoulders,
                  and arm fatigue was common. My own home movies induced a
                  seasick-like nausea before I stabilization. I'd imagine everyone
                  would like that option.
                </p>
                <p>
                  There the is a bit of a catch. More specificially, there are two
                  things that you'll want to be aware of:
                  <ul>
                    <li>Stabilizing the video loses information at the edge of
                      the frame. The stabilization effectively means the outer
                      edges of the video are sacrificed for making optimal viewing
                      in center of the picture.</li>
                    <li>If there is a timestamp on the video, it will bounce around
                      wildly. The amount it bounces depends on how shakey the
                      original video is. If the original is perfectly smooth, there
                      will be no jitter. If the original is shakey, the
                      timestamp will be bouncing around quite a bit.</li>
                  </ul>
                </p>
              </dd>
            </dl>

          </section>
        </div><!-- the left side -->
      </div><!-- / .row -->

      <hr>

      <div class="alert alert-info">
        <i class="fa fa-info-circle"></i>
        More information will be available shortly on my blog
        (<a href="https://tim-doerzbacher.com" target="_blank">
          <i class="fa fa-external-link-alt"></i>
          tim-doerzbacher.com
        </a>).
      </div>

      <hr>

      <div class="small text-center mb-4 text-muted">
        Copyright &copy; 2020-<?= $now->format('Y') ?> Tim Doerzbacher. All Rights Reserved.
      </div>

    </div><!-- / .container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
