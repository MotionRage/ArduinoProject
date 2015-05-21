<?php
namespace ModuleData\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DataController extends AbstractActionController{
    
    public function indexAction() {

//            $objectManager = $this
//                ->getServiceLocator()
//                ->get('Doctrine\ORM\EntityManager')->createQueryBuilder();
//            $objectManager
//                ->select('Data')
//                ->from('ModuleData\Entity\Data','Data');
//            
//            $query = $objectManager->getQuery();
//            $test = $query->getResult();
//            var_dump($test);
//            foreach ($test as $value) {
//                var_dump($value->getArduinoId());
//            }
            
            
//            $objectManager = $this
//                ->getServiceLocator()
//                ->get('Doctrine\ORM\EntityManager')
//            $user = new \ModuleData\Entity\Data();
//            $user->setArduinoId('Marco Pivetta');
//            $user->setDate();
//
//            $objectManager->persist($user);
//            $objectManager->flush();
//        }
        
        return new ViewModel();
    }
    public function addAction(){
        $arr = array(
            arduino=>$this->getEvent()->getRouteMatch()->getParam('id'),
            temp1 => $this->getEvent()->getRouteMatch()->getParam('value1'),
            temp2 => $this->getEvent()->getRouteMatch()->getParam('value2'),
            temp3 => $this->getEvent()->getRouteMatch()->getParam('value3'),
        );
        
         $objectManager = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager')->createQueryBuilder();
            $objectManager
                ->select('Data')
                ->from('ModuleData\Entity\Data','Data')
                ->where('Data.arduinoId =:a')
                ->setParameter('a', $arr['arduino']);
            
            $query = $objectManager->getQuery();
            $test = $query->getResult();
            foreach ($test as $value) {
                var_dump($value->getArduinoId());
            }
        return new ViewModel($arr);
        //echo 'arduino ID = '.$arduino.' temperature 1 = '.$temp . ' temperature 2 = '.$temp2.' temperature 3 = '.$temp3;
       
    }
    protected function getObjectManager()
    {
        if (!$this->_objectManager) {
            $this->_objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->_objectManager;
    }
}