<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

//字符串中文截取并且超出显示省略号

function subtext($text, $length)

{

    if (mb_strlen($text, 'utf8') > $length) {
        return mb_substr($text, 0, $length, 'utf8') . '…';
    }

    return $text;

}

//php获取中文字符拼音首字母

function getFirstCharter($str)
{

    if (empty($str)) {
        return '';
    }

    $fchar = ord($str{0});

    if ($fchar >= ord('A') && $fchar <= ord('z')) return strtoupper($str{0});

    $s1 = iconv('UTF-8', 'gb2312', $str);

    $s2 = iconv('gb2312', 'UTF-8', $s1);

    $s = $s2 == $str ? $s1 : $str;

    $asc = ord($s{0}) * 256 + ord($s{1}) - 65536;

    if ($asc >= -20319 && $asc <= -20284) return 'A';

    if ($asc >= -20283 && $asc <= -19776) return 'B';

    if ($asc >= -19775 && $asc <= -19219) return 'C';

    if ($asc >= -19218 && $asc <= -18711) return 'D';

    if ($asc >= -18710 && $asc <= -18527) return 'E';

    if ($asc >= -18526 && $asc <= -18240) return 'F';

    if ($asc >= -18239 && $asc <= -17923) return 'G';

    if ($asc >= -17922 && $asc <= -17418) return 'H';

    if ($asc >= -17417 && $asc <= -16475) return 'J';

    if ($asc >= -16474 && $asc <= -16213) return 'K';

    if ($asc >= -16212 && $asc <= -15641) return 'L';

    if ($asc >= -15640 && $asc <= -15166) return 'M';

    if ($asc >= -15165 && $asc <= -14923) return 'N';

    if ($asc >= -14922 && $asc <= -14915) return 'O';

    if ($asc >= -14914 && $asc <= -14631) return 'P';

    if ($asc >= -14630 && $asc <= -14150) return 'Q';

    if ($asc >= -14149 && $asc <= -14091) return 'R';

    if ($asc >= -14090 && $asc <= -13319) return 'S';

    if ($asc >= -13318 && $asc <= -12839) return 'T';

    if ($asc >= -12838 && $asc <= -12557) return 'W';

    if ($asc >= -12556 && $asc <= -11848) return 'X';

    if ($asc >= -11847 && $asc <= -11056) return 'Y';

    if ($asc >= -11055 && $asc <= -10247) return 'Z';

    return null;

}

//获取ueditor图片目录方法
function my_scandir($dir)
{
    //定义一个数组
    $files = array();

    //循环目录变量
    $arr = scandir($dir);

    //循环所有目录
    foreach ($arr as $file) {
        //去除不相干循环目录
        if ($file != '.' && $file != '..') {
            //判断是否是目录
            if (is_dir($dir . '/' . $file)) {
                $files[$file] = my_scandir($dir . '/' . $file);
            } else {
                $files[] = $dir . '/' . $file;

            }
        }
    }


    return $files;
}

/*
 * 系统邮件发送函数
 * @param string $tomail 接收邮件者邮箱
 * @param string $name 接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body 邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 */
function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null)
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();           //实例化PHPMailer对象
    $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();                    // 设定使用SMTP服务
    $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
    $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';          // 使用安全协议
    $mail->Host = "smtp.qq.com"; // SMTP 服务器
    $mail->Port = 465;                  // SMTP服务器的端口号
    $mail->Username = "zhanglin_1300@qq.com";    // SMTP服务器用户名
    $mail->Password = "hoctwmacfmvmbeea";     // SMTP服务器密码
    $mail->SetFrom('799781269@qq.com', '雪狐商城');
    $replyEmail = '';                   //留空则为发件人EMAIL
    $replyName = '';                    //回复名称（留空则为发件人名称）
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($tomail, $name);
    if (is_array($attachment))
    { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send();
}



