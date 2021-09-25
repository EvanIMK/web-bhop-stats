<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/stats/public/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Бхоп статистика сервера"> 
    <meta name="keywords" content="бхоп,bhop,css,cs go">
    <meta name="author" content="Kepchuk">
    <title>IMK Bhop Stats - <?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="/stats/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/stats/public/css/style-media.css">
    <link rel="stylesheet" href="/stats/public/css/all.min.css"> 
    <link rel="stylesheet" type="text/css" href="/stats/public/css/sweetalert2.min.css">
    <script src="/stats/public/js/jquery.js"></script>
    <script src="/stats/public/js/sweetalert2.all.min.js"></script>
    <script src="/stats/public/js/main.js"></script>
    <script src="/stats/public/js/sortTable.js"></script>
    <script src="/stats/public/js/form.js"></script>
    <script src="/stats/public/js/popper.js"></script>

    
</head>

<body>
    <div class="container-fluid px-0 indent">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-logo" href="/stats/">
                    <img src="/stats/public/img/logo-light.svg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                        Bhop Stats
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/stats/lastrecords"><?=LASTRECORDS?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/stats/maps"><?=DEF_MENU_MAPS?></a>
                        </li>  
                    </ul>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropleft" data-bs-toggle="dropdown" aria-expanded="false">
                    <?=HED_LANG_SELECT?>
                  </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" onclick="lselect('ru')">Русский</a></li>
                        <li><a class="dropdown-item" onclick="lselect('en')">English</a></li>
                        <li><a class="dropdown-item" onclick="lselect('de')">Deutsch</a></li>
                    </ul>
                </div>
                <form class="form-search" action="/stats/" method="POST" class="d-flex">
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="<?=HED_SEARCH_TITLE?>"><i class="fas fa-info-circle"></i></button>
                        <input type="text" name="name" class="form-control" placeholder="<?=HED_SEARCH_placeholder?>">
                        <button class="btn btn-outline-secondary" type="submit" name="submit"><?=HED_SEARCH_submit?></button>
                    </div>
                </form>
            </div>      
        </nav>
        <div class="row bg-white padding-20">
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text"><?=INFO_HED_ALL_RECORDS?></div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['Records']; ?></div>
                </div>
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text"><?=INFO_HED_REC_BASE?></div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['TrackBase']; ?></div>
                </div>
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text"><?=INFO_HED_REC_BONUS?></div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['TrackBonus']; ?></div>
                </div>
            </div>
            <div class="col-3 indent block-info-pd">
                <div class="row block-info">
                    <div class="col-12 col-lg-7 block-info-text"><?=INFO_HED_ALL_MAPS?></div>
                    <div class="col-12 col-lg-5 block-info-value"><?php echo $statisticServer['Maps']; ?></div>
                </div>
            </div>
        </div>

        <?php echo $content;?>

        <div class="row bg-white padding-20">
            <div class="col-12 col-lg-6 footer-logo1">
                <img src="/stats/public/img/logo.svg" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            </div>
            <div class="col-12 col-lg-6 footer-logo2">
                <span><a href="https://github.com/kepchuk08/web-bhop-stats">Bhop Stats</a> <i>v1.3.0</i> Developed by <a href="https://steamcommunity.com/id/kepchuk/">kepchuk</a> © <?php echo date('Y');?></span>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/stats/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/stats/public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/stats/public/js/main.js"></script>
</body>
</html>