<!DOCTYPE html>
<html lang="th">
    <head>
    <?php include("./partials/meta.php"); ?>
    <?php include("./partials/script-link-import.php"); ?>
    <style>
        * {
            font-family: 'Pridi', serif;
        }

        main {
            padding-top: 100px;
        }

        .indent-text{
             text-indent: 50px;
        }
    </style>
    </head>
    <body>
        <header>
        <?php include("./partials/nav-bar.php"); ?>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-12 col-md-12 col-lg-12">
                        <h1 class="text-center">กติกาการเล่นบริดจ์</h1>
                        <hr class="clearfix"/>
                        <h2>การประมูลไพ่</h2>
                        <div class="text-center">
                            <img src="http://www.bridgepro.com/images/BP2.gif"/>
                        </div>
                        <p class="indent-text">ผู้ที่ประมูลควรมีแต้มรวมกันอย่างต่ำ 12 แต้มขึ้นไป ( J เท่ากับ 1 แต้ม, Q เท่ากับ 2 แต้ม, K เท่ากับ 3 แต้ม และ A เท่ากับ 4 แต้ม )  ซึ่งการประมูลมีหลักสำคัญคือ "ห้ามประมูลไพ่ที่มีศักย์ต่ำกว่าคนที่ประมูลไปก่อนหน้าแล้ว"</p>
                        <p class="indent-text">โดยการประมูลจะมี 5 รูปแบบ โดยเรียกว่า "ศักย์ไพ่" คือ C ไพ่ชุดดอกจิก D ไพ่ชุดข้าวหลามตัด H ไพ่ชุดโพแดง S ไพ่ชุดโพดำและ NT ไพ่ชุดโนทรัพม์ เรียงตามลำดับ โดยระดับการประมูลจะมีจากระดับ 1 ถึงระดับ 7 เช่น 1C 1D 1H 1S 1NT 2C 2D ... 7NT โดยชุดที่ได้จากการประมูลจะเป็นชุดทรัพม์นับแต้มไล่จากสูงไปต่ำ (การนับแต้มสูงกินแต้มต่ำมีดังต่อไปนี้ : A K Q J 10 9 8 7 6 5 4 3 2) และมีการประมูลเพื่อเลือกไพ่ (Trump)ในเกม โดยที่จะมีไพ่พิเศษเรียกว่า Trump สามารถกินได้ในทุกตองที่ลงได้ ในกรณีเล่น Trump การเล่น</p>
                        <h2>การเล่น</h2>
                        <p class="indent-text">เมื่อการประมูลได้เสร็จสิ้นลงไปแล้ว ผู้ที่อยู่ทางด้านซ้ายของผู้ที่ประมูลได้ จะเป็นคนเริ่มเกม(วางไพ่เป็นคนแรก) จากนั้นคนต่อมาต้องลงไพ่ตามชุดที่ผู้ได้ลงไพ่คนแรกเป็นคนลงเสมอ นอกจากจะไม่มีไพ่ชุดนั้นแล้วถึงลงชุดอื่นได้ เล่นไปเรื่อยๆ จนไพ่ในมือทุกคนหมดลง</p>
                        <hr class="clearfix"/>
                        <i class="pull-right">https://www.gotoknow.org/posts/497159</i>
                    </div>
                </div>
            </div>
            <br/>
        </main>
        <footer class="footer">
        <?php include ("./partials/footer.php"); ?>
        </footer>
        <script src="./pages_script/index.js"></script>
    </body>
</html>