//$(document).ready(function(){
//	var errDesc=$("#errDesc").val();
//	if(errDesc!=null&&errDesc!=""){
//		$("#loginDiv").html(errDesc);
//		$("#loginDiv").show();
//		return;
//	}
//	
//	// 验证卖家注册页面
//	$("#registerSaleFrom").validate({
//		rules: {
//			email: {
//				required: true,
//				minlength: 4,
//				maxlength:16
//			},
//			password: {
//				required: true,
//				minlength: 6,
//				maxlength:16
//			}
//		},
//		messages: {
//			email: {
//				required: "请输入6-16位会员账号",
//				minlength: "用户名长度最小{4} 字符",
//				maxlength: "用户名长度最大{16} 字符"
//			},
//			password: {
//				required: "请输入6-16位会员密码",
//				minlength: "密码长度最小 {6} 字符",
//				maxlength: "密码长度最大{16} 字符"
//			}
//		}
//	});
//});
/**
 * desc:判断帐号是否存在
 * @author qiyasen
 * @param thisAccount
 */
//function login() {
//	var email=$("#email").val();
//	var password=$("#password").val();
//	var proPath=$("#proPath").val();
//	//判断是否为空
//	if(email==null||email==""||email=="用户名/手机/邮箱"){
//		$("#loginDiv").html("请输入账户名！");
//		$("#loginDiv").show();
//		return;
//	}
//	//判断 是否为空
//	if(password==null||password==""){
//		$("#loginDiv").html("密码不能为空！");
//		$("#loginDiv").show();
//		return;
//	}
//	$("#loginform").submit();
//}
/**
 * @author qiyasen
 * desc:换一张
 */
function codeImage(){
	var opath = document.getElementById("proPath").value;
	document.getElementById("rcodeimageId").src=opath+"/getVcode?timestamp="+new Date();
}