<?
 namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Articles;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;


class ArticlesController extends Controller {
	
	public function actionArticles(){
		$articles = Articles::find();
		$pagination = new Pagination([
			'defaultPageSize' => 2,
			'totalCount' => $articles->count()
		]);
		$articles = $articles->offset( $pagination->offset )->limit( $pagination->limit )->all();
		$title = 'Статьи о заработке в интернете';
		
		return $this->render('articles', 
		[
			'articles' => $articles,
			'title' => $title,
			'pagination' => $pagination
		]);
		
	}
}