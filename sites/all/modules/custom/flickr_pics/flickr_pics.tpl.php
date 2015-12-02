<span><?php echo render($date);?></span>
<span><?php echo render($tags);?></span>
<div id="gallery" class="ad-gallery">
  <div class="ad-image-wrapper">
    <div class="ad-image">
    </div>
  </div>
  <div class="ad-controls">
    <div class="ad-slideshow-controls">
      <span class="ad-slideshow-countdown" style="display: none;"></span>
    </div>
  </div>
  <div class="ad-nav">
    <div class="ad-thumbs">
<!--      <ul class="ad-thumb-list" style="width: 1353px;">-->
<!--        --><?php //foreach($photo_links as $photo_link){
//          echo '
//        <li>
//          <a href="'.$photo_link.'" class="">
//            <img src="'.substr_replace($photo_link, '_m.jpg', -4).'" class="image0" style="opacity: 0.7;">
//          </a>
//        </li>';
//        }?>
<!--      </ul>-->
      <?php print $photos; ?>
    </div>
  </div>
</div>