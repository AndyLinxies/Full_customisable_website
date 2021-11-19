DELETE CRUD: en plus de regarder video youtube
----------------------------------------------


ajouter de blabla bootstrap normal;
poser le link sir la base layouts;

creer un model avec php artisan make:model Article -cm

aller dans la migration et configurer:

dans la table Article rajouter:
string auteur
string titre
longtext texte

php artisan migrate
si tout se passse bien la table est faite

lacer un serve et voir le resultat

on va chercher une table basique et on la fou dans le welcome .blade

en dessous de la table, rajouter le fomulaire

dans la balise form: action="/articlepost" method="POST"
ajouter le @csrf

dans le controller, creer la function de base et dans la function store mettre le Request $request

$store = new Article;
$store->auteur = $request->auteur;
$store->titre = $request->titre;
$store->texte = $request->texte;
$store->save();
return redirect()->back();



faire une route post dans le web.php et foutre le link de la form dedans avec le ;

rajouter $articles = Article::all();


faire le foreach dans le blade, ajuster la suite dans le blade pour recup les data;

dans la table, avec les h et les td, on rajoute un bouton dans le td. 

poser un form dans le td du boutton
dans la balise form action="articledelete/{$article->id}" method="POST"

le post interagi avec la db

toujours dans la form: 

@csrf 
rajouter un butto, avec les bails classique


dans le controller, creer un function destroy
dans la function, il faut recup la table mais il faut recup l'element en particulier

---------------------------CODE-------------------------------
public function destroy($id){
    $destroy = Article::find($id);
    $destroy->delete();
    return redirect('/home');
}

dans le web.php

creer une route destroy

dans le uri, meettre e qu'on a mis dans la form method
Route::delete('/articledelete/{id}', [ArticleController::class, 'destroy']);

si probleme: dans le form de la blade, rejouter 

en dessous du @csrf
@method('DELETE');





