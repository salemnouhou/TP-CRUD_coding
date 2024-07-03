<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



        class PostController extends Controller
            {


                public function home(){
                   $posts = Post::all();
                  
                    return view('home',compact('posts'));
                }


                public function createForm(){

                    return view('create-post');
                }

                public function createprocess(Request $request){
                    $title = $request->titre;
                    $contenu = $request->contenu;
                    $post = new Post;
                    $post->title = $title;
                    $post->contenu = $contenu;
                    $post->save();
                    echo "Post crée avec succès";

                }

                public function show($id){

                    $post = Post::where('id',$id)->first();
                    return view('show-post',compact('post'));
                }


                public function update(Request $request){

                    $id = $request->id;
                   $post = Post::findOrFail($id);
                   

                    $post->title = $request->titre;
                    $post->contenu = $request->contenu;
                    $post->save();

                }



                public function delete($id){

                    $post = Post::findOrFail($id);
                    $post->delete();
                
                }












            }


