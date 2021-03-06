<section>
    <h2 class="sr-only">Task type navigation</h2>
    <div class="container">

        <ol class="breadcrumb">
            <?php foreach ($types as $key => $type ): ?>
                <?php if($this->uri->segment(3) === $key): ?>
                    <li class="active">
                        <?php echo $type; ?>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo site_url($this->uri->segment(1)) . "/type/$key"; ?>">
                            <?php echo $type; ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>

            <li>
                <a href="<?php echo site_url($this->uri->segment(1)); ?>/create_type" title="Add new task type">
                    <i class="fa fa-plus"></i>
                </a>
            </li>
        </ol>

    </div>
</section>