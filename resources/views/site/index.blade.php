<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Kadobeya official website</title>
  <meta name="description" content="ページの概要文を記載します">
  <meta name="viewport" content="width=device-width">
  <link href="{{ asset('css/css_v2/index.css') }}" rel="stylesheet">
  <link href="{{ asset('css/css_v2/common.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="navtext-container">
      <div class="navtext">kadobeya</div>
    </div>
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="./index.html">最初の画面</a></li>
      <li><a href="./concept.html">角部屋について</a></li>
      <li><a href="./equipment.html">設備について</a></li>
      <li><a href="./books.html">蔵書</a></li>
      <li><a href="./access.html">使い方・ルール</a></li>
      <li><a href="./urabeya.html">裏部屋</a></li>
      <li><a
          href="https://line.me/ti/g2/JE5Sji28wew-bIpnmtdGXO3iseCwHd95gRuZqA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default">角部屋のオープンチャット</a>
      </li>
    </ul>
  </header>
  <main class="main">
    <div class="first-view">
      <div class="first-view-text">
        <h1>物理角部屋</h1>
        <p>Department of Physical Science, College of Science and Engineering Ritsumeikan University</p>
      </div>
    </div>
    <section class="news">
      <div class="inner">
        <h2 class="sub_ttl">新着情報</h2>

        <!-- ここからニュース記事 -->

        <ul class="news_list">
          @foreach ($news as $content)
            <li class="news_list_item">
              <a href="">
                <div class="news_list_date">
                  <span>{{ $content->created_at }}</span>
                </div>
                <p>{{ $content->title }}</p>
                <span class="arrow"></span>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
    <div class="lead">
      <p>
        常識にとらわれることなく、既存の枠を超えて進んできた立命館大学。立命館大学理工学部<br>物理科学科はこれからも自らの壁を超え、新たな未来を創ります。このWEBサイトは<br>物理科学科の学生なら誰でも使える"角部屋"というウエストウイング7階にある部屋の紹<br>介ページです。先輩に学び、後輩から学ぶことにより物理に対する知見を広げて世界に羽<br>ばたきましょう。皆さんが部屋に訪れるのを楽しみに待っています。
      </p>
      <div class="link-button-area">
        <a class="link-button" href="https://ct.ritsumei.ac.jp/ct/">manaba+R</a>
      </div>
    </div>
    <div class="recommended">
      <h2>Manager</h2>
      <ul class="item-list">
        <li>
          <img src="./images/index/hitomi.jpg" alt="">
          <dl>
            <dt>安藤瞳(WEB管理人)</dt>
            <dd>物理科新3回生の安藤瞳です。好きな学食は塩だれカツ丼です。最近車の免許を取りました。とても嬉しいです。このサイトの管理をしているので、要望等があればお声掛けください。よろしくお願いします。
            </dd>
          </dl>
          <p class="price">ニックネーム:ひー</p>
        </li>
        <li>
          <img src="./images/index/otuka.jpg" alt="">
          <dl>
            <dt>大塚健人</dt>
            <dd>数理科学科2回生の大塚です。寝ぼけて自分のことを命題だと勘違いし、自分を証明しようとしたことがあります（？）。好きな分野は整数論やそれに付随する離散数学です。よろしくお願いします。
            </dd>
          </dl>
          <p class="price">ニックネーム:大塚くん</p>
        </li>
        <li>
          <img src="./images/index/nagisa.jpg" alt="">
          <dl>
            <dt>大部渚紗</dt>
            <dd>大阪出身、新3回生の大部渚紗です。フィギュアスケート部に所属し、忙しい毎日を送っています。天ぷらが好きです。特技は円周率30桁以上いえることです。</dd>
          </dl>
          <p class="price">ニックネーム:なぎさ</p>
        </li>
        <li>
          <img src="./images/index/sira.jpg" alt="">
          <dl>
            <dt>白浜瑞己</dt>
            <dd>こんにちわ、三回の白浜です。たまに来て、ひっそりと勉強してるんでよろしくお願いします。面白そうなゼミするなら、誘ってください。あと、ボカロに最近ハマっていい曲あったら教えてください。気軽に声かけてくださいね。
            </dd>
          </dl>
          <p class="price">ニックネーム:特になし</p>
        </li>
        <li>
          <img src="./images/index/iket.jpg" alt="">
          <dl>
            <dt>池田太朗</dt>
            <dd>初めまして。物理科新3回生の池田です。みんなからは「いけたろう君」と呼ばれることになったようです。ガンダム00とウマ娘に沼っているオタクです。角部屋には稀に出現します。よろしくお願いします
            </dd>
          </dl>
          <p class="price">ニックネーム;いけたろう君</p>
        </li>
        <li>
          <img src="./images/index/usa.jpg" alt="">
          <dl>
            <dt>工藤堅太</dt>
            <dd>数理科学科新2回生の工藤堅太です。数学研究会というサークルに所属しています。数学に興味がある、好きだという方がいらっしゃいましたら声をかけて下さい！全力で勧誘します！よろしくお願いします。
            </dd>
          </dl>
          <p class="price">ニックネーム;クドゥー</p>
        </li>
      </ul>
    </div>
  </main>
  <footer class="footer">
    <nav class="site-menu">
      <ul>
        <li><a href="./index.html">最初の画面</a></li>
        <li><a href="./concept.html">角部屋について</a></li>
        <li><a href="./equipment.html">設備について</a></li>
        <li><a href="./books.html">蔵書</a></li>
        <li><a href="./access.html">使い方・ルール</a></li>
        <li><a href="https://www.subutsu.com/?cat=16">数学・物理学びはじめ</a></li>
        <li><a
            href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwif2Mu3kIn3AhUxyIsBHWxaBp4QtwJ6BAgFEAE&url=http%3A%2F%2Fwww.ritsumei.ac.jp%2Fse2017%2Fdepartment%2Fph%2F&usg=AOvVaw0NMIxpO5xj4qZGj-lB9mUz">物理科学科公式サイト</a>
        </li>
        <li><a href="https://ct.ritsumei.ac.jp/ct/">manaba+R</a></li>
        <li><a href="https://rits-kobo.jpn.org/">実験工房</a></li>
        <li><a
            href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwi764Omgev2AhVIad4KHUOlCfAQFnoECBIQAQ&url=http%3A%2F%2Fwww.ritsumei.ac.jp%2F~kht23151%2Fkakekomi%2F&usg=AOvVaw0GkWTzKS25BmZv4sjLBu_S">物理駆け込み寺</a>
        </li>
        <li><a href="http://www.ritsumei.ac.jp/se/rp/physics/">研究室一覧</a></li>
        <li><a
            href="https://line.me/ti/g2/JE5Sji28wew-bIpnmtdGXO3iseCwHd95gRuZqA?utm_source=invitation&utm_medium=link_copy&utm_campaign=default">角部屋のオープンチャット</a>
        </li>
      </ul>
    </nav>
    <p class="footer-name">Kadobeya official website</p>
    <p class="footer-time">角部屋は1〜3回生ならいつでも使うことができます。特に用事がない場合でも気軽にお越しください。</p>
    <p class="copyright"><small>&copy;Kadobeya</small></p>
  </footer>
</body>

</html>
