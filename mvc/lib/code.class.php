<?php
namespace libs;
class code
{
    public $type = "png";
    public $width = 160;
    public $height = 50;
    public $codeLen = 4;
    public $seed = "abcdefhjkmnprstuvwxyzABCDEFHJKMNPRSTUVWXYZ345678";
    public $fontSize = array("min" => 20, "max" => 35);
    public $fontAngle = array("min" => -15, "max" => 15);
    public $lineNum = array("min" => 1, "max" => 4);
    public $linWidth = array("min" => 1, "max" => 4);
    public $pixNum = array("min" => 30, "max" => 50);

    private function createCanvas()
    {
        $this->image = imagecreatetruecolor($this->width, $this->height);
        imagefill($this->image, 0, 0, $this->setColor());
    }

    private function setColor($type = "background")
    {
        $r = $type == "background" ? mt_rand(80, 130) : mt_rand(200, 255);
        $g = $type == "background" ? mt_rand(80, 130) : mt_rand(200, 255);
        $b = $type == "background" ? mt_rand(80, 130) : mt_rand(200, 255);
        return imagecolorallocate($this->image, $r, $g, $b);
    }

    private function getText()
    {
        $str = "";
        for ($i = 0; $i < $this->codeLen; $i++) {
            $str .= $this->seed[mt_rand(0, strlen($this->seed) - 1)];
        }
        return $str;
    }

//    public function getStr(){
//       return strtolower($this->getText());
//    }


    private function setText()
    {
        $str = $this->getText();
        $this->str=strtolower($str);
        for ($i = 0; $i < $this->codeLen; $i++) {
            $size = mt_rand($this->fontSize["min"], $this->fontSize["max"]);
            $angle = mt_rand($this->fontAngle["min"], $this->fontAngle["max"]);
            $space = $this->width / ($this->codeLen * 2 + 1);
        }
        imagettftext($this->image, $size, $angle,mt_rand(max(($i)*$space,0)-50,($i*2+1)*$space-100), 40, $this->setColor("a"), 'F:\wampwamp\www\8.20mvcback\mvc\application\static\font\msyh.ttc', $str);

    }

    private function setLine()
    {
        $num = mt_rand($this->lineNum["min"], $this->lineNum["max"]);
        for ($i = 0; $i < $num; $i++) {
            $x1 = mt_rand(0, ($this->width) / 2);
            $x2 = mt_rand(($this->width) / 2, ($this->width));
            $y1 = mt_rand(0, $this->height);
            $y2 = mt_rand(0, $this->height);
            imagesetthickness($this->image, mt_rand($this->linWidth["min"], $this->linWidth["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2, $this->setColor("a"));
        }

    }

    private function setPix()
    {
        $num = mt_rand($this->pixNum["min"], $this->pixNum["max"]);
        for ($i = 0; $i < $num; $i++) {
            imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->setColor("a"));
        }
    }

    function out()
    {
        header("content-type:image/" . $this->type);
        //创建画布
        $this->createCanvas();
        //写文字
        $this->setText();

        //线条干扰
        $this->setLine();
        //像素点干扰
        $this->setPix();

        $outtype = "image" . $this->type;

        //写入cookie
//        setcookie("code",$this->str,"0","/");


        //写入session
        $_SESSION["code"]=$this->str;
        $outtype($this->image);
        imagedestroy($this->image);



    }
}

$code=new code();
$code->codeLen=5;
$code->lineNum["min"]=2;
$code->lineNum["max"]=4;
$code->fontSize["min"]=25;
$code->out();

