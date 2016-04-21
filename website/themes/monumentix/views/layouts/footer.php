<footer class="footer">
  <div class="container">

    <!-- LOWER third -->
    <div class="row">
      <div class="col-lg-2 col-sm-6">
        <h4>Quick Links:</h4>
        <ul>
          <li> <a href="">About Me</a></li>
          <li> <a href="">Contact Me</a></li>
          <li> <a href="">Project Spotlight</a></li>
          <li> <a href="">Blog</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-sm-6">
        <h4>Demo My Work</h4>
        <p>Interact with a demo application.</p>
        <a class="btn btn-sm btn-success" href="#"><span class="glyphicon glyphicon-warning"></span> Demo & Samples</a>
      </div>
      <div class="col-lg-6 col-sm-6">
        <h4>Latest Blog Post:</h4>
        <p><strong>Our Blog Post Title Goes Here </strong> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>

      </div>
      <div class="col-lg-2 col-sm-6">
        <h4>Get In Touch:</h4>
        <address>
          <strong>Monumentix / Brian Ridsdale </strong><br>
          15 Colonial Terrace <br>
          Pompton Plains, NJ 07444<br>
          <abb title="Phone">P:</abbr>&nbsp;(973)671-8326
        </address>
      </div>
    </div>
    <!-- LOWER third -->

    <hr>

    <!-- copywright -->
    <div class="row">
      <div class="col-lg-6">
        <p class="text-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
      </div>
      <div class="col-lg-6">
        <p class="text-right"><?= Yii::powered() ?></p>
      </div>
    </div>
    <!-- copywright -->


  </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
