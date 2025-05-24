<? 
namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model{
  protected $table = 'blogs';
  protected $fillable = [
    'title',
    'author',
    'content',
    'image'
  ];}


 

?>