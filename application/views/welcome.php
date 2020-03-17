<?php $this->load->view('common/header'); ?>

<head>
    <link rel="stylesheet" href="<?php echo base_url('welcome.css'); ?>">
</head>

<!-- WELCOMEページ専用のナビゲーションバー -->
<body id="welcome-body">
<div id="welcome-background-color"></div>
<nav class="navbar navbar-expand-md navbar-light nav fixed-top py-1">
    <a class="navbar-brand text-dark" href="<?php echo base_url(''); ?>" style="font-size: 30px"><i class="fas fa-pastafarianism"></i> Tasklist</a>
    <div class="collapse navbar-collapse" id="navbar">

        <ul class="navbar-nav ml-auto">
          <?php if ($this->session->userdata('is_logged_in') == true){ ?>

              <li class="nav-item ml-auto">
                  <a class="btn text-white btn-dark" href="<?php echo site_url('user/logout') ?>" style="border: 1px solid white">ログアウト</a>
              </li>

          <?php }else{ ?>

              <li class="nav-item mr my-2">
                  <a class="btn btn-dark text-white" href="<?php echo site_url('user/login') ?>">ログイン</a>
              </li>
              <li class="nav-item my-2 ml-2">
                  <a class="btn btn-dark text-white" href="<?php echo site_url('user/register') ?>">ユーザー登録</a>
              </li>

          <?php } ?>
        </ul>

    </div>


    <button class="navbar-toggler ml-auto my-2 text-dark" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

        <div class="row mx-0" id="welcome-row">
            <div class="d-none d-md-block col-md-8" id="welcome-message-none-line"></div>
            <div class="col-sm-12 col-md-4" id="welcome-message-line">
                <div id="welcome-message-container">
                    <h1>Welcome <br> to Tasklist!</h1>
                    <p>Codeigniter練習のためのCRUDできるWEBアプリケーションです。会員登録して始めましょう！</p>
                </div>
            </div>
        </div>

<?php $this->load->view('common/read_bootstrap'); ?>
</body>
</html>