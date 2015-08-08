<?
namespace Admin\Model;
use Think\Model;
class RegisteredModel extends Model {

	//新增数据的时候只允许写入email, members_id, weChat, type, password, join_time
	protected $insertFields = 'email,members_id,weChat,type,password,join_time';
	//编辑时候只允许写入type, password
	protected $updateFields = 'type,password';
}
?>
