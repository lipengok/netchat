//$(document).ready(function(){
//	var errDesc=$("#errDesc").val();
//	if(errDesc!=null&&errDesc!=""){
//		$("#loginDiv").html(errDesc);
//		$("#loginDiv").show();
//		return;
//	}
//	
//	// ��֤����ע��ҳ��
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
//				required: "������6-16λ��Ա�˺�",
//				minlength: "�û���������С{4} �ַ�",
//				maxlength: "�û����������{16} �ַ�"
//			},
//			password: {
//				required: "������6-16λ��Ա����",
//				minlength: "���볤����С {6} �ַ�",
//				maxlength: "���볤�����{16} �ַ�"
//			}
//		}
//	});
//});
/**
 * desc:�ж��ʺ��Ƿ����
 * @author qiyasen
 * @param thisAccount
 */
//function login() {
//	var email=$("#email").val();
//	var password=$("#password").val();
//	var proPath=$("#proPath").val();
//	//�ж��Ƿ�Ϊ��
//	if(email==null||email==""||email=="�û���/�ֻ�/����"){
//		$("#loginDiv").html("�������˻�����");
//		$("#loginDiv").show();
//		return;
//	}
//	//�ж� �Ƿ�Ϊ��
//	if(password==null||password==""){
//		$("#loginDiv").html("���벻��Ϊ�գ�");
//		$("#loginDiv").show();
//		return;
//	}
//	$("#loginform").submit();
//}
/**
 * @author qiyasen
 * desc:��һ��
 */
function codeImage(){
	var opath = document.getElementById("proPath").value;
	document.getElementById("rcodeimageId").src=opath+"/getVcode?timestamp="+new Date();
}