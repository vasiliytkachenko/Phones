<?

class FileRepository implements IRepository
{
    private $storagePath = '';
    public $products = [];

    public function __construct($storagePath)
    {
        $this->storagePath = $storagePath;
        $this->load();
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function load()
    {
        $fileString = file_get_contents($this->storagePath);
        if (strlen($fileString) > 0) {
            $this->products = unserialize($fileString);
        }
    }

    public function save()
    {
        file_put_contents($this->storagePath, serialize($this->products));
    }

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function remove($id)
    {
        if (count($this->products) > 0) {
            $this->products = array_filter($this->products, function ($item) use ($id) {
                return $item->id !== $id;
            });
        }
    }
}
