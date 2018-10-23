<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/23/18
 * Time: 1:48 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
  /**
   * @Route()
   */
  public function homepage()
  {
    return new Response('OMG My first page already yeah');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {

    $comments = [
      'some comment1',
      'some comment2',
      'some comment3',
    ];

    dump($slug, $this);

    return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-',' ', $slug)),
        'comments' => $comments,
    ]);
  }
}