<?php
echo mt_rand(1,9);
echo '<hr/>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<hr/>';
$code = '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code.= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
$code .= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo $code;