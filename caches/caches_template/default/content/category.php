<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

	<div id="right">
<div class="box quick-search">
		<div class="inner">
		<div class="cnt">
					<div class="jqjs_s">
						<form action="http://www.9taohao.com/category.php" method="GET">
							<dl class="jqjs_s_dl">
								<dt>1&nbsp;&nbsp; 2&nbsp;&nbsp; 3</dt>
								<dd>4&nbsp;&nbsp; 5&nbsp;&nbsp; 6&nbsp;&nbsp; 7</dd>
								<dd>8&nbsp;&nbsp; 9&nbsp;&nbsp; 10&nbsp;&nbsp;11</dd>
							</dl>
							<dl class="jqjs_s_dl">
								<script language="javascript">
									function tmp(a) {
										var b = a + 1;
										var num1 = document.getElementById('n' + a);
										var num2 = document.getElementById('n' + b);
										if (num1.value.length == 1) {
											num2.focus();
										}
									}
								</script>
								<dt style="width:93px">
									<input id=n1 name="n1" maxLength=1 size=1 value='1'
									onKeyUp="tmp(1)" />
									<input id=n2 name="n2" maxLength=1 size=1 value=''
									onKeyUp="tmp(2)" />
									<input id=n3 name="n3" maxLength=1 size=1 value=''
									onKeyUp="tmp(3)" />
								</dt>
								<dd>
									<input id=n4 name="n4" maxLength=1 size=1 value=''
									onKeyUp="tmp(4)" />
									<input id=n5 name="n5" maxLength=1 size=1 value=''
									onKeyUp="tmp(5)" />
									<input id=n6 name="n6" maxLength=1 size=1 value=''
									onKeyUp="tmp(6)" />
									<input id=n7 name="n7" maxLength=1 size=1 value=''
									onKeyUp="tmp(7)" />
								</dd>
								<dd>
									<input id=n8 name="n8" maxLength=1 size=1 value=''
									onKeyUp="tmp(8)" />
									<input id=n9 name="n9" maxLength=1 size=1 value=''
									onKeyUp="tmp(9)" />
									<input id=n10 name="n10" maxLength=1 size=1 value=''
									onKeyUp="tmp(10)" />
									<input id=n11 name="n11" maxLength=1 size=1 value=''
									/>
								</dd>
								<input type="hidden" name="id" value="" />
								<!-- <input type="hidden" name="category" value="5" />
								<input type="hidden" name="display" value="grid" id="display"
								/>
								<input type="hidden" name="brand" value="0" />
								<input type="hidden" name="price_min" value="0" />
								<input type="hidden" name="price_max" value="0" />
								<input type="hidden" name="filter_attr" value="0" />
								<input type="hidden" name="page" value="1" />
								<input type="hidden" name="sort" value="last_update" />
								<input type="hidden" name="order" value="DESC" />-->
								<input type="hidden" name="search_hm" value="1" />
							</dl>
							<div class="jqjs_spos_dd">
								<input type=image src="<?php echo IMG_PATH;?>s_soso.gif" />
							</div>
							<div class="jqjs_spos_dd3" style="display:none">
								<a href="yidong.php" style=" color:#FF0000;">清空条件</a>
							</div>
						</form>
						<div class="jqjs_spos_dd2">注明：按手机号所在位搜索，不确定请留空</div>
						<div class="shuzso" style="display:none">
							<form action="http://www.9taohao.com/category.php" name="search_top2" method="get">
								<input class="szso" type="text" name="mhss" />&nbsp;
								<input name="mhws" type="checkbox" value="en" />&nbsp;尾数包含&nbsp;&nbsp;
								<input type=image src="<?php echo IMG_PATH;?>s_soso.gif" />
								<input type="hidden" name="id" value="65" />
							</form>
						</div>
					</div>
								<div style="margin:10px;">
										
					<p style="font-size:13px;maring-bottom:5px;line-height:35px;">
						<b>&nbsp;&nbsp;运营商&nbsp;：</b>
						<a href="/category.php?id=65">全部</a>
						<a href="/category.php?id=5">上海移动</a>
						<a href="/category.php?id=6">上海联通</a>
						<a href="/category.php?id=7">上海电信</a>
					</p>
										<div class="screeBox" style="line-height:25px;margin-bottom:1px">
						<strong>全部号段 :</strong>
																		<span>全部</span>
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=15172286.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">134</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=15172128.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">135</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=15172159.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">136</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=13216272.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">137</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=15172104.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">138</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=15172100.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">139</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16176082.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">147</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=13216169.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">150</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16191557.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">151</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=13216164.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">152</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16176446.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">157</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16176068.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">158</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=13216193.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">159</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16193173.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">178</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16176122.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">182</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=13216450.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">183</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=13216173.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">187</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=16176183.0.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">188</a>&nbsp;
																	</div>
										<div class="screeBox" style="line-height:25px;margin-bottom:1px">
						<strong>价格区间 :</strong>
																		<span>全部</span>
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.13216273.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">100-500</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.13216170.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">500-1000</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.13216165.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">1000-2000</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.15172101.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">2000-5000</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.16176083.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">5000-10000</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.15539332.0.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">10000以上</a>&nbsp;
																	</div>
										<div class="screeBox" style="line-height:25px;margin-bottom:1px">
						<strong>包含数位 :</strong>
																		<span>全部</span>
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.15539421.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">9较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.13216175.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">8较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.15172266.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">7较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.15539333.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">6较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.15172288.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">5较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.16176156.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">4较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.15539385.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">3较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.13216166.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">2较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.13216195.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">1较多</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.13216171.0.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">0较多</a>&nbsp;
																	</div>
										<div class="screeBox" style="line-height:25px;margin-bottom:1px">
						<strong>热点号段 :</strong>
																		<span>全部</span>
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539422.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">999</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539457.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">888</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539429.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">777</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539334.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">666</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539350.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">555</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.16190135.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">444</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539386.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">333</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539344.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">222</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15172132.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">111</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.15539356.0.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">000</a>&nbsp;
																	</div>
										<div class="screeBox" style="line-height:25px;margin-bottom:1px">
						<strong>生日号码 :</strong>
																		<span>全部</span>
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.15172127.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">1月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16191837.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">2月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16193260.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">3月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16194237.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">4月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16193015.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">5月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16191552.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">6月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16193240.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">7月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16192644.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">8月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16190773.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">9月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16193422.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">10月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16176067.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">11月</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.16190689.0&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">12月</a>&nbsp;
																	</div>
										<div class="screeBox" style="line-height:25px;margin-bottom:1px">
						<strong>号码规律 :</strong>
																		<span>全部</span>
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.15172267&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABAB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16190648&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AABB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16282609&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABBA</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.15172133&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAA</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16191052&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">升降序ABC</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.15539423&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAAA</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16176065&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">升降序ABCD</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16282304&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AABBCC</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16190893&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAABBB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16191283&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABABAB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16547759&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AABBCCDD</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16176186&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAAB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.15539424&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">尾数重叠</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16190087&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAAAA</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16190136&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAAAAA</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16542579&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABCDABCD</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16716536&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABABCDCD</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16176042&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AABBB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.13216167&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAAAB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16191945&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABCABC</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16190449&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAABB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16282360&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">ABBABB</a>&nbsp;
																								<a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.0.0.16547728&amp;n1=1&n2=&n3=&n4=&n5=&n6=&n7=&n8=&n9=&n10=&n11=&search_hm=1" class="shuaxuan">AAAABB</a>&nbsp;
																	</div>
									</div>
				</div>
</div>
</div>
		<script>
			<!--
			/*第一种形式 第二种形式 更换显示样式*/
			function setTab(name, cursel, n) {
				for (i = 1; i <= n; i++) {
					var menu = document.getElementById(name + i);
					var con = document.getElementById("con_" + name + "_" + i);
					menu.className = i == cursel ? "hover" : "";
					con.style.display = i == cursel ? "block" : "none";
				}
			}
			//-->
			
		</script>
		<script language="javascript">
			function ajaxregform(obj) {
				var url = 'index.php?controller=ajax&action=checkregform';
				data = 'account=' + obj.account.value + '&username=' + obj.username.value;
				xhr.send(url, data, 'checkregform_callback');
			}
			function ShowAll(obj, id) {
				var doc = document.getElementById(id);
				doc.style.display = (obj.checked ? 'block' : 'none');
				return false;
			}
		</script>
		<div class="margin_div">
			<div class="Tab6">
				<div style="display:none;">
					<div id="con_five_1"></div>
					<div id="con_five_2"></div>
					<div id="con_five_3"></div>
					<div id="con_five_4"></div>
					<div id="con_five_5"></div>
					<div id="con_five_6"></div>
					<div id="con_five_7"></div>
				</div>
			</div>
		</div>
		<div style="clear:both;"></div>
		
				<ul class="list_ul_m">
  <form method="GET" class="sort list-header" name="listform">
  显示方式：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="<?php echo IMG_PATH;?>display_mode_list.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="<?php echo IMG_PATH;?>display_mode_grid_act.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="<?php echo IMG_PATH;?>display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
      <a href="category.php?category=5&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&&page=1&sort=goods_id&order=DESC#goods_list"><img src="<?php echo IMG_PATH;?>goods_id_default.gif" alt="按上架时间排序"></a>
  <a href="category.php?category=5&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&&page=1&sort=shop_price&order=ASC#goods_list"><img src="<?php echo IMG_PATH;?>shop_price_default.gif" alt="按价格排序"></a>
  <a href="category.php?category=5&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&&page=1&sort=last_update&order=ASC#goods_list"><img src="<?php echo IMG_PATH;?>last_update_DESC.gif" alt="按更新时间排序"></a>
  <input type="hidden" name="category" value="5" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="last_update" />
  <input type="hidden" name="order" value="DESC" />
    </form>
			<li class="nisb">
			<table width="100%" class="list_table" cellpadding="0" cellspacing="0">
				<tr align="center" bgcolor="#e5e5e5">
					<td width="18%"height="28" >全部号码</td>
					<td width="10%"align="center">话费</td>
					<td width="14%">卡费</td>
					<td width="7%">购买</td>
                    <td width="18%"height="28" >全部号码</td>
					<td width="10%"align="center">话费</td>
					<td width="14%">卡费</td>
					<td width="7%">购买</td>
				</tr>
	  			</table>
			</li>
    <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
        		
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899587" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>136</font><font style='color:#00A06B;font-size:16px'>8170</font><font style='color:#FF6600;font-size:16px'>1863</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>0</strong></td>
				<td width="14%"><strong>323元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899587"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899588" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>136</font><font style='color:#00A06B;font-size:16px'>8170</font><font style='color:#FF6600;font-size:16px'>1865</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>0</strong></td>
				<td width="14%"><strong>323元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899588"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899314" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1886</font><font style='color:#FF6600;font-size:16px'>9275</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899314"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899313" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1886</font><font style='color:#FF6600;font-size:16px'>9251</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899313"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899312" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1886</font><font style='color:#FF6600;font-size:16px'>9152</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899312"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899311" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1886</font><font style='color:#FF6600;font-size:16px'>1275</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899311"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899310" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1886</font><font style='color:#FF6600;font-size:16px'>1035</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899310"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899309" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1886</font><font style='color:#FF6600;font-size:16px'>0795</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899309"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899308" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>7910</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899308"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899307" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>7901</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899307"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899306" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>2701</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899306"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899305" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>2370</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899305"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899304" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>2327</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899304"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899303" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>2270</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899303"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899302" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>2162</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899302"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899301" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>2130</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899301"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899300" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1952</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899300"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899299" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1735</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899299"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899298" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1731</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899298"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899297" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1652</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899297"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899296" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1621</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899296"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899295" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1592</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899295"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899294" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1307</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899294"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899293" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1275</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899293"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899292" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1082</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899292"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899291" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>1063</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899291"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899290" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>0871</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899290"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899289" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>0739</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899289"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899288" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>0732</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899288"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899287" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>138</font><font style='color:#00A06B;font-size:16px'>1885</font><font style='color:#FF6600;font-size:16px'>0573</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>50</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899287"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899286" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0198</font><font style='color:#FF6600;font-size:16px'>3753</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899286"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899285" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0197</font><font style='color:#FF6600;font-size:16px'>7631</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899285"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899284" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0196</font><font style='color:#FF6600;font-size:16px'>3870</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899284"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899283" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0196</font><font style='color:#FF6600;font-size:16px'>3281</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899283"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899282" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>136</font><font style='color:#00A06B;font-size:16px'>8170</font><font style='color:#FF6600;font-size:16px'>8517</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>0</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899282"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899281" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>135</font><font style='color:#00A06B;font-size:16px'>8568</font><font style='color:#FF6600;font-size:16px'>7813</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>0</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899281"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899280" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>135</font><font style='color:#00A06B;font-size:16px'>8568</font><font style='color:#FF6600;font-size:16px'>5813</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>0</strong></td>
				<td width="14%"><strong>667元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899280"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899120" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0197</font><font style='color:#FF6600;font-size:16px'>7312</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>708元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899120"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899119" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0197</font><font style='color:#FF6600;font-size:16px'>6817</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>708元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899119"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
			<li>
				<table width="50%" class="hmys_table"  >
				<tr align="center">
				<td width="18%"   height="33"><a href="goods.php?id=3899118" target=_blank>
								<font style='color:#1B4F93;font-size:16px'>137</font><font style='color:#00A06B;font-size:16px'>0197</font><font style='color:#FF6600;font-size:16px'>1831</font>								</a>
				</td>     
				<td width="10%"align="center"><strong>1</strong></td>
				<td width="14%"><strong>708元</strong></td>		
				<td width="8%" align="center" valign="middle">
										<a href="goods.php?id=3899118"><img src="<?php echo IMG_PATH;?>btn_buy.png"></a>
									
				</td>
				        
				</tr>
				</table>
				</li>
					
        </form>
  		</ul>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
		
		<div style="clear:both;"></div>
		<div class="manu10">
			
<div class="pagebar">
<form name="selectPageForm" action="http://www.9taohao.com/category.php" method="get">
 <div id="pager">
  总计 <b>9008</b>  个记录                      <span class="page_now">1</span>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=last_update&amp;order=DESC">2</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=3&amp;sort=last_update&amp;order=DESC">3</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=4&amp;sort=last_update&amp;order=DESC">4</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=5&amp;sort=last_update&amp;order=DESC">5</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=6&amp;sort=last_update&amp;order=DESC">6</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=7&amp;sort=last_update&amp;order=DESC">7</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=8&amp;sort=last_update&amp;order=DESC">8</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=9&amp;sort=last_update&amp;order=DESC">9</a>
                      <a href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=10&amp;sort=last_update&amp;order=DESC">10</a>
            
  <a class="next" href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=last_update&amp;order=DESC">下一页</a>  <a class="last" href="category.php?id=5&amp;price_min=0&amp;price_max=0&amp;page=226&amp;sort=last_update&amp;order=DESC">...最末页</a>      <input style="display:none" type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="formBorder" />
		    <input type="hidden" name="category" value="5" />
        <input type="hidden" name="keywords" value="" />
        <input type="hidden" name="sort" value="last_update" />
        <input type="hidden" name="order" value="DESC" />
        <input type="hidden" name="cat" value="5" />
        <input type="hidden" name="brand" value="0" />
        <input type="hidden" name="searchnum" value="" />
        <input type="hidden" name="price_min" value="0" />
        <input type="hidden" name="price_max" value="0" />
        <input type="hidden" name="filter_attr" value="0" />
        <input type="hidden" name="display" value="grid" />
        </div>
</form>
</div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
		</div>
	</div>
</div>
<?php include template("content","footer"); ?>
	

