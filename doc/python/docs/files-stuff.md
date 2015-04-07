# Python - Files and Stuff

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## File

* open - Open a file
* read - Reads the contents of the file. You can assign the result to a variable.
* readline - Reads just one line of a text file.
* truncate - Empties the file. Watch out if you care about the file.
* write('stuff') - Writes "stuff" to the file.
* close - Closes the file. Like File -> Save... in your editor.

***

SYNTAX:

参考：[tutorialspoint](http://www.tutorialspoint.com/python/python_files_io.htm)<sup><i class="ext-link"></i></sup>

```python
file object = open(file_name [, access_mode][, buffering])
fileObject.write(string)
fileObject.read([count])
fileObject.close()
```

List of Access Mode:

<table class="dataintable">
    <tbody>
    <tr>
        <th style="width:10%">Modes</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>r</td>
        <td>Opens a file for reading only. The file pointer is placed at the beginning of the file. This is the default
            mode.
        </td>
    </tr>
    <tr>
        <td>rb</td>
        <td>Opens a file for reading only in binary format. The file pointer is placed at the beginning of the file.
            This is the default mode.
        </td>
    </tr>
    <tr>
        <td>r+</td>
        <td>Opens a file for both reading and writing. The file pointer will be at the beginning of the file.</td>
    </tr>
    <tr>
        <td>rb+</td>
        <td>Opens a file for both reading and writing in binary format. The file pointer will be at the beginning of the
            file.
        </td>
    </tr>
    <tr>
        <td>w</td>
        <td>Opens a file for writing only. Overwrites the file if the file exists. If the file does not exist, creates a
            new file for writing.
        </td>
    </tr>
    <tr>
        <td>wb</td>
        <td>Opens a file for writing only in binary format. Overwrites the file if the file exists. If the file does not
            exist, creates a new file for writing.
        </td>
    </tr>
    <tr>
        <td>w+</td>
        <td>Opens a file for both writing and reading. Overwrites the existing file if the file exists. If the file does
            not exist, creates a new file for
            reading and writing.
        </td>
    </tr>
    <tr>
        <td>wb+</td>
        <td>Opens a file for both writing and reading in binary format. Overwrites the existing file if the file exists.
            If the file does not exist, creates a new file for reading and writing.
        </td>
    </tr>
    <tr>
        <td>a</td>
        <td>Opens a file for appending. The file pointer is at the end of the file if the file exists. That is, the file
            is in the append mode. If the file does not exist, it creates a new file for writing.
        </td>
    </tr>
    <tr>
        <td>ab</td>
        <td>Opens a file for appending in binary format. The file pointer is at the end of the file if the file exists.
            That is, the file is in the append mode. If the file does not exist, it creates a new file for writing.
        </td>
    </tr>
    <tr>
        <td>a+</td>
        <td>Opens a file for both appending and reading. The file pointer is at the end of the file if the file exists.
            The file opens in the append mode. If the file does not exist, it creates a new file for reading and
            writing.
        </td>
    </tr>
    <tr>
        <td>ab+</td>
        <td>Opens a file for both appending and reading in binary format. The file pointer is at the end of the file if
            the file exists. The file opens in the append mode. If the file does not exist, it creates a new file for
            reading and writing.
        </td>
    </tr>
    </tbody>
</table>

EXAMPLE:


读取相对路径：

参考：

[Stack Overflow 1270951](http://stackoverflow.com/questions/1270951/python-how-to-refer-to-relative-paths-of-resources-when-working-with-code-repo)<sup><i class="ext-link"></i></sup>

[Stack Overflow 7165749](http://stackoverflow.com/questions/7165749/open-file-in-a-relative-location-in-python)<sup><i class="ext-link"></i></sup>



```python
f = open("/music/_singles/kairo.mp3", "rb")
```

每次读取一行：

```python
f = open("test.txt", "r")
print f.readline()
print f.readline()

myList = []
for line in f:
    myList.append(line)

print(myList) # print with the newline character \n
f.close()
```

从文件中读取数据，输出为数组：

```python
with open('test.txt', 'r') as f:
    data = f.readlines()
    for line in data:
        words = line.split()
        for word in words:
            print word
```


## Stuff
