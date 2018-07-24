<?

interface IRepository
{

    public function load();

    public function save();

    public function add(Product $product);

    public function remove($id);

}
