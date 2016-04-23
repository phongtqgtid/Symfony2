<?php
/**
 * Created by PhpStorm.
 * User: quatt_000
 * Date: 4/11/16
 * Time: 10:16 AM
 */

namespace Ens\JobeetBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller ;

class JobAdminController extends  Controller {

    public function batchActionExtend(ProxyQueryInterface $selectedModelQuery)
    {
        if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false)
        {
            throw new AccessDeniedException();
        }

        $request = $this->get('request');
        $modelManager = $this->admin->getModelManager();

        $selectedModels = $selectedModelQuery->execute();

        try {
            foreach ($selectedModels as $selectedModel) {
                $selectedModel->extend();
                $modelManager->update($selectedModel);
            }
        } catch (\Exception $e) {
            $this->get('session')->setFlash('sonata_flash_error', $e->getMessage());

            return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
        }

        $this->get('session')->setFlash('sonata_flash_success',  sprintf('The selected jobs validity has been extended until %s.', date('m/d/Y', time() + 86400 * 30)));

        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
    public function batchActionDeleteNeverActivatedIsRelevant()
    {
        return true;
    }

    public function batchActionDeleteNeverActivated()
    {
        if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }

        $em = $this->getDoctrine()->getEntityManager();
        $nb = $em->getRepository('EnsJobeetBundle:Job')->cleanUp(60);

        if ($nb) {

            // từ symfony2.1 trở đi sẽ không dùng get('session')->setFlash nữa mà dùng get('session')->getFlashBag()->add();
            $this->get('session')->getFlashBag()->add('sonata_flash_success',  sprintf('%d never activated jobs have been deleted successfully.', $nb));

           // $this->get('session')->setFlash('sonata_flash_success',  sprintf('%d never activated jobs have been deleted successfully.', $nb));
        } else {
           // $this->get('session')->setFlash('sonata_flash_info',  'No job to delete.');

            $this->get('session')->getFlashBag()->add('sonata_flash_info','No job to delete.');
        }

        "<script language='javascript'>";
         echo "alert('xóa thành công những công việc mà quá 60 ngày không gia hạn !')";
        "</script>";
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));

    }

} 