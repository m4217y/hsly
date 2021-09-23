
<title>网恋翻车之黑山老妖你别跑！！</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"7>
<link rel="stylesheet" href="xkh/css/style.css">
</head>

<div id="hedadr">
<img src="imgs/logo.gif">
<ul>xkh</ul>
<h3>念念不忘，必有回响！</h3></div>
 <div class="title">照妖镜</div>
 <div class="show">
 <div class="pic">
 <div> <div style="width: 90%; margin: 10px auto; border: 1px solid #ccc; text-align: center">
     <?php
         error_reporting(0);
             $type=trim($_GET['type']);
                 $page=isset($_GET['page'])?$_GET['page']:0;//从零开始
                     $id=trim($_GET['id']);
                         $imgnums = 3;    //每页显示的图片数
                             $path="img";   //图片保存的目录
                                 
                                     if ($type=="del"){
                                                 echo '确定清空所有照片? <br /><br />';
                                                         echo "<a href=?type=dell&id=$id>确定</a> <a href=javascript:history.back(-1)>返回上一页</a> <br /><br />";
                                                                 exit;
                                     }elseif($type=="dell"){
                                                 //清空照片函数
                                                         $handle = opendir($path);
                                                                 while (false !== ($file = readdir($handle))) {
                                                                                list($filesname,$ext)=explode(".",$file);
                                                                                           if($ext=="png" and explode('_', $filesname)[0]==$id) {
                                                                                                              if (!is_dir('./'.$file)) {
                                                                                                                                    unlink('./img/'.$file);
                                                                                                              }
                                                                                           }
                                                                 }
                                                                         echo '该ID下的所有照片已经清除！<br /><br />';
                                     }
                                         
                                             $handle = opendir($path);
                                                 $i=0;
                                                     while (false !== ($file = readdir($handle))) {
                                                                list($filesname,$ext)=explode(".",$file);
                                                                       if($ext=="png" and explode('_', $filesname)[0]==$id) {
                                                                                      if (!is_dir('./'.$file)) {
                                                                                                        $array[]=$file;//保存图片名称
                                                                                                                      ++$i;
                                                                                      }
                                                                       }
                                                     }
                                                         if($array){
                                                                    rsort($array);//修改日期倒序排序
                                                                           echo "<a href=?page=$page&id=$id&type=del><h1>清空所有照片</h1></a> <br /><br />";
                                                         }
                                                             else{
                                                                         echo "<h2>该ID下没有任何照片</h2><br /><br />";
                                                             }
                                                                 for($j=$imgnums*$page; $j<($imgnums*$page+$imgnums)&&$j<$i; ++$j){
                                                                            echo '<div>';
                                                                                   echo "<img src=".$path."/".$array[$j]."><br /><br />";
                                                                                          echo '</div>';
                                                                 }
                                                                     $realpage = @ceil($i / $imgnums) - 1;
                                                                         $Prepage = $page-1;
                                                                             $Nextpage = $page+1;
                                                                                 if($Prepage<0){
                                                                                            echo "上一页 ";
                                                                                                   echo "<a href=?page=$Nextpage&id=$id><h4>下一页</h4></a> ";
                                                                                                          echo "<a href=?page=$realpage&id=$id><h4>末页</h4></a> ";
                                                                                 }elseif($Nextpage >= $realpage){
                                                                                            echo "<a href=?page=0&id=$id><h4>首页</h4></a> ";
                                                                                                   echo " <a href=?page=$Prepage&id=$id><h4>上一页</h4></a> ";
                                                                                                          echo " <h4>下一页</h4>";
                                                                                 }else{
                                                                                            echo "<a href=?page=0&id=$id><h4>首页</h4></a> ";
                                                                                                   echo "<a href=?page=$Prepage&id=$id><h4>上一页</h4></a> ";
                                                                                                          echo "<a href=?page=$Nextpage&id=$id><h4>下一页</h4></a> ";
                                                                                                                 echo "<a href=?page=$realpage&id=$id><h4>末页</h4></a> ";
                                                                                 }
                                                                                     ?>
                                                                                     </div>
                                                                                     </div>
                                                                                 }
                                                                                 }
                                                                                 }
                                                                 }
                                                             }
                                                         }
                                                                                      }
                                                                       }
                                                     }
                                                                                                              }
                                                                                           }
                                                                 }
                                     }
                                     }