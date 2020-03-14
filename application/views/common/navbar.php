<nav class="navbar navbar-expand-md navbar-dark bg-dark nav fixed-top py-1" style="opacity: 0.95">
    <a class="navbar-brand" href="<?php echo base_url(''); ?>" style="font-size: 30px"><i class="fas fa-pastafarianism"></i> Tasklist</a>
    <div class="collapse navbar-collapse" id="navbar">

        <ul class="navbar-nav ml-auto">
            <?php if ($this->session->userdata('is_logged_in') == true){ ?>

                <li class="nav-item mx-2">
                    <a class="btn text-white" href="<?php echo site_url('user/logout') ?>" style="border: 1px solid white">ログアウト</a>
                </li>
                
            <?php }else{ ?>
                    
                <li class="nav-item mx-2 my-2">
                    <a class="btn text-white" href="<?php echo site_url('user/login') ?>" style="border: 1px solid white">ログイン</a>
                </li>
                <li class="nav-item my-2">
                    <a class="btn btn-primary" href="<?php echo site_url('user/register') ?>">ユーザー登録</a>
                </li>

            <?php } ?>
        </ul>
        
    </div>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>
    


    <!-- <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">ホーム <span class="sr-only">(現位置)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">リンク</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">無効</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                    <a class="dropdown-item" href="#">リンク1</a>
                    <a class="dropdown-item" href="#">リンク2</a>
                    <a class="dropdown-item" href="#">リンク3</a>
                </div>
            </li>
      </ul>
    </div> -->
</nav>

    <!-- ナビゲーションバーがメイン画面の被らないための余白 -->
    <div style="height: 59px"></div>