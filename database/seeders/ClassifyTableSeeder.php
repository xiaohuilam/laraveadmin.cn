<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class ClassifyTableSeeder extends Seeder
{
    protected $bindModel='App\Models\Classify';
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        $class = $this->bindModel;
        $json_data=<<<'JSON'
[{"id":1,"name":"顶级分类","description":"顶级分类","parent_id":0,"level":1,"left_margin":1,"right_margin":42,"created_at":"2017-08-12 02:51:07","updated_at":"2017-08-12 02:51:07","deleted_at":null},{"id":2,"name":"健康险","description":"健康险","parent_id":1,"level":2,"left_margin":2,"right_margin":9,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":3,"name":"长期健康险","description":"长期健康险","parent_id":2,"level":3,"left_margin":3,"right_margin":4,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":4,"name":"短期健康险","description":"短期健康险","parent_id":2,"level":3,"left_margin":5,"right_margin":6,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":5,"name":"一年期业务","description":"一年期业务","parent_id":2,"level":3,"left_margin":7,"right_margin":8,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":6,"name":"分红寿险","description":"分红寿险","parent_id":1,"level":2,"left_margin":10,"right_margin":15,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":7,"name":"两全寿险","description":"两全寿险","parent_id":6,"level":3,"left_margin":11,"right_margin":12,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":8,"name":"年金保险","description":"年金保险","parent_id":6,"level":3,"left_margin":13,"right_margin":14,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":9,"name":"普通寿险","description":"普通寿险","parent_id":1,"level":2,"left_margin":16,"right_margin":25,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":10,"name":"终身寿险","description":"终身寿险","parent_id":9,"level":3,"left_margin":17,"right_margin":18,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":11,"name":"两全寿险","description":"两全寿险","parent_id":9,"level":3,"left_margin":19,"right_margin":20,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":12,"name":"定期寿险","description":"定期寿险","parent_id":9,"level":3,"left_margin":21,"right_margin":22,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":13,"name":"年金保险","description":"年金保险","parent_id":9,"level":3,"left_margin":23,"right_margin":24,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":14,"name":"意外伤害险","description":"意外伤害险","parent_id":1,"level":2,"left_margin":26,"right_margin":31,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":15,"name":"一年期以上业务","description":"一年期以上业务","parent_id":14,"level":3,"left_margin":27,"right_margin":28,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":16,"name":"一年期业务","description":"一年期业务","parent_id":14,"level":3,"left_margin":29,"right_margin":30,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":17,"name":"投资连结产品","description":"投资连结产品","parent_id":1,"level":2,"left_margin":32,"right_margin":35,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":18,"name":"终身寿险","description":"终身寿险","parent_id":17,"level":3,"left_margin":33,"right_margin":34,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":19,"name":"万能寿险","description":"万能寿险","parent_id":1,"level":2,"left_margin":36,"right_margin":41,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":20,"name":"终身寿险","description":"终身寿险","parent_id":19,"level":3,"left_margin":37,"right_margin":38,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null},{"id":21,"name":"年金保险","description":"年金保险","parent_id":19,"level":3,"left_margin":39,"right_margin":40,"created_at":"2017-08-12 11:44:29","updated_at":"2017-08-12 11:44:29","deleted_at":null}]
JSON;
        $data = json_decode($json_data,true);
        $class::insertReplaceAll($data);
    }
}