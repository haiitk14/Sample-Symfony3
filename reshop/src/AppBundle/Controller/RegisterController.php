<?php
/**
 * Created by PhpStorm.
 * User: haidt
 * Date: 9/28/17
 * Time: 4:09 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RegisterController extends Controller
{
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        $session=$request->getSession();
        $user=new User();
        if($request->getMethod()=="POST"){
            $username=$request->request->get('_username');
            $password=$request->request->get('_password');
            $confirm=$request->request->get('_confirm');
            if($password != $confirm){
                $session->getFlashBag()->set('error','Pass error');
                return  $this->redirectToRoute('register');
            }else if($username =="" || $password ==""){
                $session->getFlashBag()->set('error','User Pass Not Empty');
                return  $this->redirectToRoute('register');
            }else{
                $user->setUsername($username);
                $encode=$this->get('security.password_encoder');
                $pass_encode=$encode->encodePassword($user, $password);
                $user->setPassword($pass_encode);

                $em=$this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $session->getFlashBag()->set('notice','Success');
                return  $this->redirectToRoute('login');
            }
        }else{
            return $this->render('default/register.html.twig');
        }
    }
}