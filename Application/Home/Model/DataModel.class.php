<?
namespace Admin\Model;
use Think\Model;
class DataModel extends Model {

	//用户模块不允许写入写入会员信息,会员信息只能在后台添加,前台只能修改
	//protected $insertFields = '';
	//修改会员资料是之允许写入birth,car,childern,constllation,gender,height,home,incom,live,marriage,modify,nickname,place,schooling,type,work
	protected $updateFields = 'birth,car,childern,constellation,gender,height,home,income,live,marriage,modify,nickname,place,schooling,type,work';
}
?>
