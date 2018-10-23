<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/23/18
 * Time: 1:48 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
    return new Response(sprintf(
      'Future page to the article: %s',
    $slug
    ));
  }
}