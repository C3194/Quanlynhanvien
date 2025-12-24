<div class="row">
  <div class="row frititle">
    <h1>商品カテゴリの新規追加</h1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=adddm" method="post">
      <div class="row mb10">
        カテゴリコード<br>
        <input type="text" name="maloai" disabled>
      </div>

      <div class="row mb10">
        カテゴリ名<br>
        <input type="text" name="tenloai" required>
      </div>

      <div class="row mb10">
        <input type="submit" name="themoi" value="新規追加">
        <input type="reset" value="再入力">
        <input type="danhsach_loaihang.html"><input type="button" value="リスト"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
    </form>
  </div>
</div>