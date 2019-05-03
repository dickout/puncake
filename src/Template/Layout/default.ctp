<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=isset($title) ? $title : $this->fetch('title')?>
    </title>
</head>
<body>
    <?if(isset($options['slider']) and $options['slider'] == '1'):?>
        <div class="images">
            <?foreach($images as $image):?>
                <img src="<?=$this->url?><?=$image['src']?>" alt="<?=$image['title']?>">
            <?endforeach;?>
        </div>
    <?endif;?>
    <?= $this->fetch('content') ?>
</body>
</html>