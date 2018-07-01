<!DOCTYPE html>
<html lang="en">
<head>
<title>Mahakam Grande - <?php echo $title ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Estate Teplate">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo base_url('assets/');?>styles/bootstrap4/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url('assets/');?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css"  rel="stylesheet" type="text/css" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url('assets/');?>plugins/OwlCarousel2-2.2.1/owl.carousel.css" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url('assets/');?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url('assets/');?>plugins/OwlCarousel2-2.2.1/animate.css" rel="stylesheet" type="text/css" >

<?php if ($menu === 'home') : ?>
<link href="<?php echo base_url('assets/');?>styles/main_styles.css" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url('assets/');?>styles/responsive.css" rel="stylesheet" type="text/css" >

<?php elseif ($menu === 'kontak'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>styles/contact_responsive.css">

<?php elseif ($menu === 'rumah'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>plugins/magnific-popup/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>styles/listings_single_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>styles/listings_single_responsive.css">

<?php elseif ($menu === 'berita'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>plugins/colorbox/colorbox.css" >
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>styles/news_responsive.css">
<?php endif; ?>
</head>