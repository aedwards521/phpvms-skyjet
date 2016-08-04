<h3 class="page-header theme-red">Pilot Badge</h3>
<div class="text-center">
	<img src="<?php echo $badge_url; ?>" class="img-responsive img-thumbnail nocorner">
</div>
<label>Direct Link</label>
<input onclick="this.select()" type="text" value="<?php echo $badge_url ?>" style="width: 100%" class="form-control nocorner">
<label>Image Link</label>
<input onclick="this.select()" type="text" value='<img src="<?php echo $badge_url ?>" />' style="width: 100%" class="form-control nocorner">
<label>BBCode</label>
<input onclick="this.select()" type="text" value='[img]<?php echo $badge_url ?>[/img]' style="width: 100%" class="form-control nocorner">