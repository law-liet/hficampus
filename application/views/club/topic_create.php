    <title>Create Topic Article</title>
    <style>
        form {
            border:solid 1px;
        }
    </style>
    <h3>Create Topic Article in "<?php echo $club['name']; ?>"</h3>
    <form action="<?php echo site_url('club/'.$cid.'/topic/create');?>" method="post">
        
        <?php foreach (array('title','content') as $item):?>
            <p><?php echo $item;?>:<input name="<?php echo $item;?>" /></p>
        <?php endforeach;?>
        <input type="submit" value="submit" />
    </form>