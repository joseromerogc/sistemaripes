<?php

namespace Acme\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ProductBundle\Entity\Product;
use Acme\ProductBundle\Entity\Category;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function createAction($nombre)
		{
		$category = new Category();
		$category->setName('Main Products');
		
		$product = new Product();
		$product->setName($nombre);
		$product->setPrice('19.99');
		$product->setDescription('Lorem ipsum dolor');
		// relate this product to the category
		$product->setCategory($category);
		
		$em = $this->getDoctrine()->getManager();
		
		$em->persist($category);
		$em->persist($product);
		$em->flush();
		return new Response(
		'Created product id: '.$product->getId()
		.' and category id: '.$category->getId()
		);
		}
		
	public function showAction($id)
	{
		$product = $this->getDoctrine()
		->getRepository('AcmeProductBundle:Product')
		->find($id);
		if (!$product) {
		throw $this->createNotFoundException(
		'No product found for id '.$id
		);
			}	
		
		$categoryName = $product->getCategory()->getName();
		
		return $this->render(
			'AcmeProductBundle:Default:index.html.twig',
			array('product' => $product,'categoria' => $categoryName)
		);	
	}
	public function updateAction($id)
		{
			$em = $this->getDoctrine()->getManager();
			$product = $this->getDoctrine()
					->getRepository('AcmeProductBundle:Product')
					->find($id);
					
			if (!$product) {
			throw $this->createNotFoundException(
			'No product found for id '.$id
			);
			}
			$product->setName('New product name!');
			
			$em->flush();
			return $this->redirect($this->generateUrl('show',array('id' => $id)));
		}

	public function deleteAction($id)
		{
			$em = $this->getDoctrine()->getManager();
			$product = $this->getDoctrine()
					->getRepository('AcmeProductBundle:Product')
					->find($id);
					
			if (!$product) {
			throw $this->createNotFoundException(
			'No product found for id '.$id
			);
			}
			
			$em->remove($product);
			$em->flush();
			return $this->redirect($this->generateUrl('homepage'));
		}	
}
