<div class="content-wrapper wrapper">
      
    <div class="container">

	  <div class="sitemap_holder p20">
	    <h3>Карта сайта</h3>

		<br />
		<h4>Контент:</h4>
		<br />

		<?php foreach ($content_arr as $content) { ?>
		- <a href="/content/al/<?=$content['content_alias']?>"><?=$content['content_name']?></a><br />
		<?php } ?>

          <form method="POST" action="https://www.liqpay.com/api/3/checkout"
                accept-charset="utf-8">
              <input type="hidden" name="data" value="eyAidmVyc2lvbiIgOiAzLCAicHVibGljX2tleSIgOiAieW91cl9wdWJsaWNfa2V5IiwgImFjdGlv
biIgOiAicGF5IiwgImFtb3VudCIgOiAxLCAiY3VycmVuY3kiIDogIlVTRCIsICJkZXNjcmlwdGlv
biIgOiAiZGVzY3JpcHRpb24gdGV4dCIsICJvcmRlcl9pZCIgOiAib3JkZXJfaWRfMSIgfQ=="/>
              <input type="hidden" name="signature" value="QvJD5u9Fg55PCx/Hdz6lzWtYwcI="/>
              <input type="image"
                     src="//static.liqpay.com/buttons/p1ru.radius.png"/>
          </form>

      </div>
	</div>
</div>