<?
namespace Admin\Model;
use Think\Model;
class DataModel extends Model {

	//新增会员资料数据的时候只允许写入members_id,modify 
	protected $insertFields = 'members_id,modify';
}
?>
