import shutil, random, os
src = 'mama/'
des = 'haha/'
filenames = random.sample(os.listdir(src), 3)
for file_name in filenames:
    full_file_name = os.path.join(src, file_name)
    if (os.path.isfile(full_file_name)):
        shutil.move(full_file_name, des)