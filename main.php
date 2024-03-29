<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>
  <?php echo tpl_favicon(array('favicon', 'mobile')) ?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>

<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">


    <div class="header">
      <div class="logo">
        <?php  tpl_link(wl(),'<img src="'.ml('logo.png').'"." />',' accesskey="h" title="[H]"') ?>
      </div>
      <div class="desc">
        <?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"')?>
      </div> 
      <div class="pagename">
        [[<?php tpl_link(wl($ID,'do=backlink'),tpl_pagetitle($ID,true),'title="'.$lang['btn_backlink'].'"')?>]]
        </div>
      <div class="clearer"></div>
    </div>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

    <div class="bar" id="bar__top">
      <div class="bar-left" id="bar__topleft">
<?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>
      </div>

      <div class="bar-right" style="margin: 2px 25px 0 0;">
       <?php tpl_searchform()?>
      </div>

      <div class="clearer"></div>

    </div>
  </div>

<div style="padding: 0 20px 0 35px;">
        <hr>
  </div>

<div id="tb">

                <?php tpl_button('edit')?>
                <?php tpl_button('history')?>
                <?php tpl_button('recent')?>
                <?php tpl_button('revert')?>
        <div class="bar-right" id="bar__bottomright">
                <?php tpl_button('admin')?>
                <?php tpl_button('profile')?>
        </div>
</div>

  <?php tpl_flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">

    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

  <div class="clearer"></div>

  <?php tpl_flush()?>

<div id="footer-art"></div>
<div id="footer-grass"></div>

<div id="footer">

   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

<div class="bar-right" id="bar__bottomright">
    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
        <?php tpl_pageinfo()?>&nbsp;&nbsp;&nbsp; <br/><br/><br/><br/><br/><br/>
      </div>
    </div>    
</div>


<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

    <div class="bar">
      <div class="bar-left" id="bar__bottomleft" style="margin-top: 10px;">
        <?php tpl_button('login')?>
        <?php tpl_button('subscribe')?>
    <!--<?php tpl_button('media')?> -->
        <?php tpl_button('index')?>
      </div>       
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_button('top')?>&nbsp;
        </div>
</div> <!-- end footnotes -->
            <div class="clearer"></div>
</div>
<br/>
  <?php tpl_license(false);?>

  </div> <!-- end footer -->
</div> <!-- end dokuwiki -->

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
