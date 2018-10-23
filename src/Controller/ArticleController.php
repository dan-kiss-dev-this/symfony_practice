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
   * @Route("/news/why-asteroids-taste-like-bacon")
   */
  public function show()
  {
    return new Response('Future page to show one space article, not the route above is called a slug aka a url version of a title');
  }
}