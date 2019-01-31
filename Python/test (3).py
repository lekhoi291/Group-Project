import cv2
import glob
from keras.preprocessing.image import ImageDataGenerator, img_to_array, load_img

datagen = ImageDataGenerator(
    rotation_range=40,
    width_shift_range=0.2,
    height_shift_range=0.2,
    shear_range=0.2,
    zoom_range=0.2,
    horizontal_flip=True,
    fill_mode='nearest')
# img = load_img('/test rotate/72650795_p0.jpg')
img = [cv2.imread(file) for file in glob.glob('C:/xampp/htdocs/taobien/New folder/test rotate/*jpg')]
x = img_to_array(img)
x = x.reshape((1,) + x.shape)
i = 0
for batch in datagen.flow(x, save_to_dir='preview', save_prefix='IFCB1_2009', save_format='png'):
    i += 1
    if i > 36:
        break
