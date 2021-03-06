<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\nav\NavX;

AppAsset::register($this);

use kongoon\theme\material;
material\MaterialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'ระบบข้อมูลสุขภาพและบริหารจัดการ 43 แฟ้ม',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo NavX::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'หน้าหลัก', 'url' => ['/site/index']],
                    ['label' => 'กลุ่มงานประกันสุขภาพ', 'items' => [
                            ['label' => 'OP/IP Individual Data', 'items' => [
                                    ['label' => 'ข้อมูลการให้บริการนอกเขตในอำเภอ', 'url' => ['#']],
                                    '<li class="divider"> </li>',
                                    ['label' => 'ข้อมูลการให้บริการนอกเขตต่างอำเภอ', 'url' => ['#']]
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'ความครอบคลุมหลักประกันสุขภาพถ้วนหน้า', 'url' => ['#']],
                            '<li class="divider"> </li>',
                            ['label' => 'ข้อมูลผู้มีสิทธิหลักประกันสุขภาพถ้วนหน้าที่ใช้จัดสรรงบประมาณรายเดือน (VR)', 'url' => ['#']],
                            '<li class="divider"> </li>',
                            ['label' => 'รายงานการจัดการสิทธิ์ว่าง', 'url' => ['#']],
                            ['label' => 'ข้อมูลเพื่อเพิ่มประชากร UC', 'url' => ['#']],
                            ['label' => 'ข้อมูลการให้บริการผู้ป่วยนอก', 'url' => ['#']],
                        ]],
                    ['label' => 'ระบบข้อมูลตัวชี้วัด 2559', 'items' => [
                            ['label' => 'ตัวชี้วัด QOF การจัดบริการสร้างเสริมสุขภาพและป้องกันโรค', 'items' => [
                                    ['label' => 'QOF 1.1', 'url' => ['#']],
                                    ['label' => 'QOF 1.2', 'url' => ['#']],
                                    ['label' => 'QOF 1.3', 'url' => ['#']],
                                    ['label' => 'QOF 1.4', 'url' => ['#']],
                                    ['label' => 'QOF 1.5', 'url' => ['#']],
                                    ['label' => 'QOF 1.6', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'ตัวชี้วัด QOF การจัดบริการปฐมภูมิ', 'items' => [
                                    ['label' => 'QOF 2.1', 'url' => ['#']],
                                    ['label' => 'QOF 2.2', 'url' => ['#']],
                                    ['label' => 'QOF 2.3', 'url' => ['#']],
                                    ['label' => 'QOF 2.4', 'url' => ['#']],
                                    ['label' => 'QOF 2.5', 'url' => ['#']],
                                    ['label' => 'QOF 2.6', 'url' => ['#']],
                                    ['label' => 'QOF 2.7', 'url' => ['#']],
                                    ['label' => 'QOF 2.8', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'ตัวขี้วัด QOF บริการที่จำเป็นตอบสนองปัญหาสุขภาพของประชาชนในพื้นที่', 'items' => [
                                    ['label' => 'QOF 4.3', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'รายงานสรุปผลงาน QOF 2558 แยกตามรายอำเภอ', 'url' => ['#']],
                            ['label' => 'รายงานสรุปผลงาน QOF 2559 แยกตามรายอำเภอ', 'url' => ['#']],
                        ]],
                    ['label' => 'กลุ่มงานส่งเสริมสุขภาพ', 'items' => [
                            ['label' => 'รายงาน ANC', 'items' => [
                                    ['label' => 'รายงานการให้บริการ ANC', 'url' => ['#']],
                                    ['label' => 'กำลังพัฒนา', 'url' => ['#']],
                                ]]
                        ]],
                    ['label' => 'กลุ่มงานควบคุมโรค', 'items' => [
                            ['label' => 'รายงานคัดกรอง NCDScreen', 'items' => [
                                    ['label' => 'ผลการคัดกรองความเสี่ยงต่อภาวะเบาหวาน', 'url' => ['#']],
                                    ['label' => 'ผลการคัดกรองความเสี่ยงต่อภาวะความดันโลหิตสูง', 'url' => ['#']],
                                    ['label' => 'รายงานผลการตรวจ Hba1c ในผู้ป่วยโรคเบาหวาน', 'url' => ['#']],
                                    ['label' => 'รายงานผลการตรวจ Lipid Profile ในผู้ป่วยโรคเบาหวาน', 'url' => ['#']],
                                    ['label' => 'รายงานผลการตรวจสุขภาพช่องปากในผู้ป่วยโรคเบาหวาน', 'url' => ['#']],
                                    ['label' => 'รายงานผลการตรวจหาวัณโรคในผู้ป่วยโรคเบาหวาน', 'url' => ['#']],
                                    ['label' => 'รายงานการตรวจคัดกรอง Microalbumin ในผู้ป่วยโรคเบาหวาน', 'url' => ['#']],
                                    ['label' => 'ผู้ป่วยเบาหวานที่ได้รับการตรวจจอประสาทตาประจำปี (Cockpit)', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'รายงานผู้ป่วย NCDScreen', 'items' => [
                                    ['label' => 'การปรับเปลี่ยนพฤติกรรมกลุ่มเสี่ยงต่อภาวะเบาหวาน', 'url' => ['#']],
                                    ['label' => 'การปรับเปลี่ยนพฤติกรรมกลุ่มเสี่ยงต่อภาวะความดันโลหิตสูง', 'url' => ['#']],
                                    ['label' => 'ผู้ป่วยโรค เบาหวาน ความดันโลหิตสูง อัมพฤกษ์อัมพาต หัวใจขาดเลือด มะเร็งตับ / ท่อน้ำดี', 'url' => ['#']],
                                    ['label' => 'ผู้ป่วยตายด้วยโรค เบาหวาน ความดันโลหิตสูง อัมพฤกษ์อัมพาต หัวใจขาดเลือด มะเร็งตับ / ท่อน้ำดี', 'url' => ['#']],
                                    ['label' => 'ผู้ป่วยโรคเบาหวานอายุ 40 ปี ขึ้นไปได้รับยา Aspirin', 'url' => ['#']],
                                    ['label' => 'รายงานผู้ป่วยเบาหวานควบคุมระดับน้ำตาล ระดับความดันโลหิตสูงได้ ในผู้ป่วยโรคเบาหวาน', 'url' => ['#']],
                                    ['label' => 'รายงานผู้ป่วยเบาหวานควบคุมระดับน้ำตาล ระดับความดันโลหิตสูงได้ ในผู้ป่วยโรคความดันโลหิตสูง', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'โรคหนองพยาธิ', 'url' => ['#']],
                            ['label' => 'รายงานโรคจากการประกอบอาชีพและสิ่งแวดล้อม', 'url' => ['#']],
                            ['label' => 'EPI หัด คางทูม หัดเยอรมัน (รหัส 061, 071)', 'url' => ['#']],
                            ['label' => 'รายงานการฉีดวัคซีนไข้หวัดใหญ่', 'url' => ['#']],
                        ]],
                    ['label' => 'กลุ่มงานทันตสารธารณสุข', 'items' => [
                            ['label' => 'หญิงตั้งครรภ์', 'items' => [
                                    ['label' => 'จำนวนหญิงตั้งครรภ์ทั้งหมด', 'url' => ['#']],
                                    ['label' => 'หญิงตั้งครรภ์ได้รับการตรวจสุขภาพช่องปาก', 'url' => ['#']],
                                    ['label' => 'หญิงตังครรภ์ได้รับการขูดหินปูน', 'url' => ['#']],
                                    ['label' => 'หญิงตังครรภ์ได้รับบริการทันตกรรม', 'url' => ['#']],
                                    ['label' => 'หญิงตั้งครรภ์ที่ต้องส่งต่อ (REFER)', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'คลินิคส่งเสริมสุขภาพเด็กดี (WCC)', 'items' => [
                                    ['label' => 'จำนวนเด็กที่มารับบริการในคลินิค WCC ทั้งหมด', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กที่มารับบริการได้รับแปรงสีฟัน ยาสีฟัน', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กที่ได้รับการตรวจสุขภาพช่องปาก', 'url' => ['#']],
                                    ['label' => 'จำนวนผู้ดูแลเด็กได้รับการฝึกแปรงฟันแบบลงมือปฏิบัติ', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กทั้งหมดที่มีฟันน้ำนม (เด็ก 9  เดือนขึ้นไป)', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กที่รับการทาฟลูออไรด์วานิช', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'ศูนย์พัฒนาเด็กเล็ก', 'items' => [
                                    ['label' => 'จำนวนเด็กใน ศพด. ทั้งหมด', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กที่ได้รับการตรวจสุขภาพช่องปาก', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กที่ได้รับการทาฟลูออไรด์วานิช', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กอายุ 3 ปีทั้งหมด (เด็กอายุ 3 ปี ถึง 3 ปี 11 เดือน 29 วัน)', 'url' => ['#']],
                                    ['label' => 'จำนวนเด็กปฐมวัย (3 ปี) ปัญหาฟันน้ำนมผุ', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'เด็กประถมศึกษา', 'items' => [
                                    ['label' => 'เด็กประถมศึกษาได้รับการตรวจช่องปาก', 'url' => ['#']],
                                    ['label' => 'เด็กประถมศึกษาได้รับการเคลือบหลุมร่องฟัน', 'url' => ['#']],
                                    ['label' => 'เด็กประถมศึกษาได้รับบริการ Comprehensive Care', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'วัยทำงาน', 'items' => [
                                    ['label' => 'จำนวนประชากรวัยทำงานได้รับการคัดกรองโรคความดันและเบาหวานทั้งหมด', 'url' => ['#']],
                                    ['label' => 'จำนวนประชากรวัยทำงานได้รับการตรวจช่องปากร่วมกับการคัดกรองโรคความดันและโรคเบาหวาน', 'url' => ['#']],
                                ]],
                            '<li class="divider"> </li>',
                            ['label' => 'ผู้สูงอายุ', 'items' => [
                                    ['label' => 'จำนวนผู้สูงอายุทั้งหมด', 'url' => ['#']],
                                    ['label' => 'จำนวนผู้สูงอายุไดรับการตรวจสุขภาพช่องปาก', 'url' => ['#']],
                                    ['label' => 'จำนวนผู้สูงอายุที่ใส่ฟันเทียม', 'url' => ['#']],
                                    ['label' => 'จำนวนผู้สูงอายุที่ใส่ฟันเทียมรากฟันเทียม', 'url' => ['#']],
                                ]],
                        ]],
                    ['label' => 'เครื่องมือ', 'items' => [
                            ['label' => 'Login เข้าระบบ', 'url' => ['#']],
                            ['label' => 'ข้อมูลประชากร PPE Specific Group & Activity', 'url' => ['#']],
                            ['label' => 'Logout ออกจากระบบ', 'url' => ['#']],
                        ]],
                ],
            ]);


            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; มุกศรีโสธรเจริญราชธานี <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
