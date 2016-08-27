<h3 class="page-header theme-red"><?php echo $item->subject; ?></h3>
<small class="help-block">Posted on <?php echo date(DATE_FORMAT,$item->postdate); ?> by <?php echo $item->postedby; ?></small>
<br>
<?php echo html_entity_decode($item->body); ?>

<?php 
$prev = NewsData::GetPrev($item->id);
$next = NewsData::GetNext($item->id);

if(!empty($prev)){ ?>
	<a class="news-prev" href="<?php echo url('/SimpleNews/item/'.$prev->id); ?>">&laquo; <?php echo $prev->subject; ?></a>
<?php
} if(!empty($next)){ ?>
	<a class="news-next" href="<?php echo url('/SimpleNews/item/'.$next->id); ?>"><?php echo $next->subject; ?> &raquo;</a>
<?php
}
?>