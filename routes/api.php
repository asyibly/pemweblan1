use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts/{id}', [PostController::class, 'show']);

Route::post('posts/{postId}/comments', [CommentController::class, 'store']);