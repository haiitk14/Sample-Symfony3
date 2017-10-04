<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cate;
use AppBundle\Entity\Product;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="wellcome")
     */
    public function indexAction()
    {
        $user=$this->getUser();
        if($user== NULL){
            return $this->redirectToRoute('login');
        }
//        $user=$this->getUser();
        $em=$this->getDoctrine()->getRepository("AppBundle:Product")->findBy(["userid"=>$user->getId()]);

        return $this->render("default/home.html.twig",[
           "item"=>$em
        ]);
    }
    /**
     * @Route("/new-product", name="new-product")
     */
    public function newProductAction(Request $request)
    {
        $user=$this->getUser();
        if($user== NULL){
            return $this->redirectToRoute('login');
        }
        $rs=$this->getDoctrine()->getRepository('AppBundle:Cate')->findAll();

        if($request->getMethod()=='POST'){
//            $user=$this->getUser();

            $name=$request->get("_proName");
            $details=$request->get("_details");
            $cateid=$request->get("_cate");
            $status=$request->get("_status");

            $cate=$this->getDoctrine()->getRepository(Cate::class)->find($cateid);

            $validator=$this->get('validator');




            $product=new Product();
            $product->setName($name);
            $product->setDetails($details);
            $product->setCateid($cate);
            $product->setStatus($status);
            $product->setUserid($user);

            $errors = $validator->validate($product);

            if (count($errors) > 0){
                return $this->render('default/new-product.html.twig', [
                    'errors' => $errors,
                    'listItem'=>$rs
                ]);
            }else {
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();

                return $this->redirectToRoute('wellcome');
            }
        }
        return $this->render("default/new-product.html.twig",[
            "listItem"=>$rs
        ]);
    }
    /**
     * @Route("/load", name="load")
     */
    public function loadAction(Request $request){
        $user=$this->getUser();
        if($user== NULL){
            return $this->redirectToRoute('login');
        }
        $product=$this->getDoctrine()->getRepository(Product::class)->findBy(["userid"=>$user->getId()]);
        die('ok');
    }


    /**
     * @Route("/change", name="change")
     */
    public function changePassAction(Request $request){
        $user=$this->getUser();
        if($user== NULL){
            return $this->redirectToRoute('login');
        }
        $session = $request->getSession();
        if($request->getMethod()=="POST"){
            $oldPass=$request->get('_oldPass');
            $newPass=$request->get('_newPass');
            $rePass=$request->get('_confirmPass');
//            $user=$this->getUser();
            $encode=$this->container->get('security.encoder_factory')->getEncoder($user);

            $oldPass_Encode=$encode->encodePassword($oldPass,$user->getSalt());
            if($user->getPassword() != $oldPass_Encode){
                $session->getFlashBag()->set('error', "Wrong old password!");
                return $this->render('default/changepass.html.twig');

            }elseif ($newPass != $rePass){
                $session->getFlashBag()->set('error', "New password or Confirm password do not match!!");
                return $this->render('default/changepass.html.twig');

            }else{
                $new_pwd_encoded = $encode->encodePassword($newPass, $user->getSalt());
                $user->setPassword($new_pwd_encoded);

                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $session->getFlashBag()->set('notice', "Password change successfully!");
                return $this->redirectToRoute('wellcome');
            }
        }
        return $this->render('default/changepass.html.twig');
    }

//    public function checkLogin(){
//        $user=$this->getUser();
//        if($user== NULL){
//            return $this->redirectToRoute('login');
//        }
//    }
}
