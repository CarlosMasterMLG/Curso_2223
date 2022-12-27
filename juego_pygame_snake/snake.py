import pygame
import time
from pygame.locals import *

if __name__ == "__main__":
    pygame.init()
    surface = pygame.display.set_mode((1000,500))
    surface.fill((255,255,255))
    pygame.display.flip() 

    location_x = 450
    location_y = 200
    color = (255,0,0)
    exit = False
    while not exit:
        
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
            
            #¿Se ha pulsado una tecla?
            if event.type == pygame.KEYDOWN:
                
                if event.key == pygame.K_RIGHT:
                    print("Key_RIGHT has been pressed")
                    location_x+=10

                    #while location_x < 1000:
                        #location_x+=10
                        #time.sleep(1)


                if event.key == pygame.K_DOWN:
                    print("Key K_DOWN has been pressed")
                    location_y+=10
                if event.key == pygame.K_LEFT:
                    print("Key_LEFT has been pressed")
                    location_x-=10
                if event.key == pygame.K_UP:
                    print("Key_UP has been pressed")
                    location_y-=10
                    
        #Pintar
        surface.fill((255,255,255))
        #pygame.image.load('257822.jpg')
        pygame.draw.rect(surface, color, pygame.Rect(location_x, location_y, 60, 60))
        pygame.draw.rect(surface, color, pygame.Rect(location_x-50, location_y+5, 50, 50))
        pygame.draw.rect(surface, color, pygame.Rect(location_x-90, location_y+10, 40, 40))
        pygame.display.flip()
               





