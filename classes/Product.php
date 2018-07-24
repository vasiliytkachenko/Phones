<?

class Product
{
    public $id = '';
    public $name = '';
    public $color = '';
    public $price = '';
    public $image = '';

    public function __construct($name, $color, $price, $imageFile)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->id = $this->generateID();
        $uploaddir = 'images/';
        $filename = basename($imageFile['image']['name']);
        $dotPos = strrpos($filename, '.');
        $type = substr($filename, $dotPos);
        $uploadfile = $uploaddir . md5($filename . time()) . $type;
        if (move_uploaded_file($imageFile['image']['tmp_name'], $uploadfile)) {
            $this->image = $uploadfile;
        }

    }

    private function generateID()
    {
        $template = '12345678890qwertyuiop[];lkjhgfdsazxcvbnm,.QWERTYUIOPLKJHGFDSAZXCVBNM';
        $tmpStr = substr(str_shuffle($template), 0, 10);
        return md5($tmpStr . time());
    }
}
