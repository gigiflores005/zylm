<?php
/*********************/
/*                   */
/*  Version : 5.1.0  */
/*  Author  : RM     */
/*  Comment : 071223 */
/*                   */
/*********************/

if ( !_obfuscate_XGkLCg47bQ��( "IN_ZYADS" ) )
{
		exit( );
}
include( TPL_DIR."/header.php" );
echo "\r\n<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"page\">\r\n  <tr>\r\n    <td><table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#FFFFFF\">\r\n        <tr>\r\n          <td  valign=\"top\">";
if ( $statetype == "success" )
{
		echo "            <table  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#FFFFFF\" class=\"success\" id=\"success\" width=\"97%\" >\r\n              <tr>\r\n                <td height=\"30\"><img  src='/templates/";
		echo Z_TPL;
		echo "/images/ico_success_16.gif' align='absmiddle' /><span style=\"margin-left:10px;\">�����ɹ���</span></td>\r\n                <td>&nbsp;</td>\r\n              </tr>\r\n            </table>\r\n            <script language=\"JavaScript\" type=\"text/javascript\">\r\n\t\t\tnoneSuccess();\r\n\t\t\t</script>\r\n            ";
}
echo "            <table width=\"97%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n              <tr>\r\n                <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                    <tr>\r\n                      <td><ul id=\"li-type\">\r\n                          <li><a href=\"do.php?action=";
echo $action;
echo "&actiontype=add&TB_iframe=true&height=400&width=500\"  title=\"������Ʒ\" class=\"thickbox\"><img  src='/templates/";
echo Z_TPL;
echo "/images/add.gif' align='absmiddle' /> <strong>������Ʒ</strong></a></li>\r\n                          <li>|</li>\r\n                          <li><a href=\"do.php?action=integral\">��Ʒ�б�</a></li>\r\n\t\t\t\t\t\t  \r\n\t\t\t\t\t\t  <li>|</li>\r\n                          <li><a href=\"do.php?action=exchange\"  ";
if ( !_obfuscate_BB84ZzB6bXMtaQ��( $status ) )
{
		echo "class=\"li-active\"";
}
echo ">�ҽ��������</a></li>\r\n\t\t\t\t\t \r\n\t\t\t\t\t\t   <li>|</li>\r\n                          <li><a href=\"do.php?action=exchange&status=0\"   ";
if ( $status == "0" && _obfuscate_BB84ZzB6bXMtaQ��( $status ) )
{
		echo "class=\"li-active\"";
}
echo ">δ����</a></li>\r\n\t\t\t\t\t\t  \r\n\t\t\t\t\t\t   <li>|</li>\r\n                          <li><a href=\"do.php?action=exchange&status=1\"  ";
if ( $status == "1" )
{
		echo "class=\"li-active\"";
}
echo ">�ѷ���</a></li>\r\n\t\t\t\t\t\t  \r\n\t\t\t\t\t\t  \r\n                        </ul></td>\r\n                    </tr>\r\n                  </table></td>\r\n              </tr>\r\n              <tr>\r\n                <td height=\"50\"><select name=\"select\" class=\"select\" onchange=\"\$i('choosetype').value=this.value\">\r\n                    <option>��������</option>\r\n                    <option value=\"del\">ɾ��</option>\r\n\t\t\t\t\t<option value=\"delivery\">����</option>\r\n                  </select>\r\n                  <input type=\"button\" name=\"Submit\" value=\"�ύ\" class=\"submit-x\" onclick=\"choose();\"/>\r\n                  &nbsp;\r\n                  &nbsp;\r\n\t\t\t\t   <form action=\"?action=";
echo $action;
echo "&actiontype=search\" method=\"post\">\r\n                  ��ԱUid��\r\n                    <input name=\"searchval\" type=\"text\" class=\"reg\" id=\"searchval\" value=\"";
echo $searchval;
echo "\" size=\"15\" />\r\n                  <input type=\"submit\" name=\"Submitx\" value=\"����\" class=\"submit-x\"/> </form></td>\r\n              </tr>\r\n              <tr>\r\n                <td><form id=\"form\" name=\"form\" method=\"post\" action=\"do.php?action=";
echo $action;
echo "&actiontype=postchoose\">\r\n                    <input name=\"choosetype\"  id=\"choosetype\"  type=\"hidden\" value=\"\" />\r\n\t\t\t\t\t<input name=\"reurl\"  id=\"reurl\"  type=\"hidden\" value=\"";
echo $reurl;
echo "\" />\r\n                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border:0px #DFDFDF solid\">\r\n                      <tr class=\"td_b_2\">\r\n                        <td width=\"5\" height=\"33\" class=\"td_b_l\" >&nbsp;</td>\r\n                        <td width=\"30\"><input type=\"checkbox\" name=\"chkall\" onclick=\"checkall(this.form, 'sid')\" /></td>\r\n                        <td width=\"90\">��Ա</td>\r\n                        <td width=\"160\">�һ���Ʒ</td>\r\n                        <td width=\"80\">�ҽ�����</td>\r\n                        <td width=\"80\">�ռ���</td>\r\n                        <td width=\"90\">�绰</td>\r\n                        <td>��ַ</td>\r\n                        <td width=\"80\">�һ�ʱ��</td>\r\n                        <td width=\"50\" align=\"center\">����</td>\r\n                        <th width=\"6\" class=\"td_b_3\" >&nbsp;</th>\r\n                      </tr>\r\n                      ";
foreach ( ( array )$exchange as $e )
{
		$u = $usermodel->_obfuscate_AWdvL2pvQDJgJGwzZx0�( $e['uid'] );
		$i = $integralmodel->_obfuscate_cgFxEG5tYT4VYmVzGHs�( $e['integralid'] );
		echo "                      <tr>\r\n                        <td height=\"30\"  class=\"td_b_4\" id=\"b-bottom\" >&nbsp;</td>\r\n                        <td  ><input type=\"checkbox\" name=\"id[]\" value=\"";
		echo $e['id'];
		echo "\" />                        </td>\r\n                        <td><a href=\"do.php?action=affiliate&actiontype=search&searchval=";
		echo $u['uid'];
		echo "&searchtype=2\">";
		echo $u['username'] == "" ? "��ɾ���Ļ�Ա" : $u['username'];
		echo "</a></td>\r\n                        <td><a href=\"do.php?action=integral&id=";
		echo $e['integralid'];
		echo "\" >";
		echo $i['name'];
		echo "</a></td>\r\n                        <td>";
		echo $e['integral'];
		echo "</td>\r\n                        <td>";
		echo $e['contact'];
		echo "</td>\r\n                        <td>";
		echo $e['tel'];
		echo "</td>\r\n                        <td>";
		echo $e['address'];
		echo "</td>\r\n                        <td>";
		echo $e['addtime'];
		echo "</td>\r\n                        <td align=\"center\">\r\n\t\t\t\t\t\t";
		if ( $e['status'] == "0" )
		{
				echo "\t\t\t\t\t\t<a href=\"do.php?action=exchange&actiontype=postchoose&id[]=";
				echo $e['id'];
				echo "&choosetype=delivery&reurl=";
				echo $reurl;
				echo "\" >����</a> \r\n\t\t\t\t\t\t";
		}
		else
		{
				echo " \r\n\t\t\t\t\t\t\t<font color=red>�ѷ���</font>\r\n\t\t\t\t\t\t";
		}
		echo "\t\t\t\t\t\t</td> \r\n                        <td width=\"6\" class=\"td_b_5\">&nbsp;</td>\r\n                      </tr>\r\n                      ";
}
echo "                      <tr class=\"td_b_7\">\r\n                        <td height=\"33\"  class=\"td_b_6\" >&nbsp;</td>\r\n                        <td  ><input type=\"checkbox\" name=\"chkallde\" onclick=\"checkall(this.form, 'uid','chkallde')\" /></td>\r\n                        <td >��Ա</td>\r\n                        <td >�һ���Ʒ</td>\r\n                        <td >�ҽ�����</td>\r\n                        <td >�ռ���</td>\r\n                        <td >�绰</td>\r\n                        <td >��ַ</td>\r\n                        <td >�һ�ʱ��</td>\r\n                        <td align=\"center\">����</td>\r\n                        <td width=\"6\"  class=\"td_b_8\">&nbsp;</td>\r\n                      </tr>\r\n                    </table>\r\n                  </form></td>\r\n              </tr>\r\n              <tr>\r\n                <td height=\"50\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                    <tr>\r\n                      <td width=\"200\"><select name=\"select2\" class=\"select\" onchange=\"\$i('choosetype').value=this.value\">\r\n                          <option>��������</option>\r\n                          <option value=\"del\">ɾ��</option>\r\n\t\t\t\t\t\t  <option value=\"delivery\">����</option>\r\n                        </select>\r\n                        <input type=\"button\" name=\"Submit3\" value=\"�ύ\" class=\"submit-x\" onclick=\"choose();\"/></td>\r\n                      <td align=\"right\">";
echo $viewpage;
echo "</td>\r\n                    </tr>\r\n                  </table></td>\r\n              </tr>\r\n            </table></td>\r\n        </tr>\r\n      </table></td>\r\n  </tr>\r\n</table>\r\n<script language=\"JavaScript\" type=\"text/javascript\">\r\nfunction choose(){\r\n\tvar v = \$i(\"choosetype\").value;\r\n\tvar t='';\r\n    if(v == 'del') t = 'ɾ��';\t\r\n\t if(v == 'delivery') t = '����';\t\r\n\tif(t=='') {alert('����ѡ��δѡ��');return false }\t\r\n\tvar numchecked = getNumChecked('form');\r\n\tif(numchecked < 1) { alert('��ѡ����Ҫ��������Ϣ'); return false }\t\r\n\tif(!v)return false;\r\n\tif(confirm('��ȷ��Ҫ'+ t +'��' + numchecked + '�� ����\\n�㡰ȷ�ϡ�'+ t +'���㡰ȡ����ȡ��������')){\r\n\t\tthis.document.form.submit();\r\n\t\treturn true;\r\n\t}\r\n\treturn false;\r\n}\r\nfunction doRemoveWin(){\r\n\ttb_remove();\r\n\tdocument.location.reload();\r\n}\r\n</script>\r\n";
include( TPL_DIR."/footer.php" );
?>
